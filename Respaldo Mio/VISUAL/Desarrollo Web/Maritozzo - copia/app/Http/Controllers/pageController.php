<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class pageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    function register(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }
    function login(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }
}
