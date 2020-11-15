<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{

    public function logIn($email, $password)
    {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }


    public function logOut()
    {
        Auth::logout();
    }
}
