<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function __construct()
    {
    }

    public function login()
    {
        return view('login');
    }

    public function enter(Request $request)
    {

        // $user = new User;

        // $user->name = 'Gabriel';
        // $user->email = 'gabriel77780@hotmail.com';
        // $user->password = Hash::make('Gabriel');

        // $user->save();

        $email = 'gabriel77780@hotmail.com';
        $password = 'Gabriel';
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
}
