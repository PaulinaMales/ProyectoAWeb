<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    #protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        switch (auth()->user()->rol_id) {
            case '1':
                return route('admin.index');
                break;
            case '2':
                return route('presidente.president');
                break;
            case '3':
                return route('jugador.player');
                break;
            default:
                return RouteServiceProvider::HOME;
        }
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended($this->redirectTo());
        } else {
            // Autenticación fallida
            return redirect()->back()->withErrors([
                'email' => 'Las credenciales no son válidas',
            ]);
        }
    }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
