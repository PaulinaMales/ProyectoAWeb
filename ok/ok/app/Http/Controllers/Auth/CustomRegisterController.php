<?php

// app/Http/Controllers/Auth/CustomRegisterController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomRegisterController extends RegisterController
{
    use RegistersUsers;

    /**
     * Override the RegisterController's register() method.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = $this->create($request->all());

        // Remove the call to Auth::login() to prevent automatic login
        // Auth::login($user);

        return redirect($this->redirectPath());
    }
}
