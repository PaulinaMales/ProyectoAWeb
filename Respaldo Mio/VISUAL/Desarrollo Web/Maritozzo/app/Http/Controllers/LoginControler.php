<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->with('message', 'Credenciales incorrectas');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }   

    public function authenticated(Request $request, $user){
        return redirect('/home');
    }
}