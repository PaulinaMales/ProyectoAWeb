<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerUser(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('login')->with('succes', 'Creado Exitosamente');
    }
}