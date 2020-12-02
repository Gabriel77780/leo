<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $authService;

    function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function getLoginView()
    {
        return view('login');
    }

    public function logIn(Request $request)
    {


        /* $request->validate([
            'email' => 'required|max:1',
            'password' => 'required|max:1',
        ]); */

        $loggedIn =
            $this->authService->logIn(
                $request->input('email'),
                $request->input('password')
            );

        return $loggedIn ? redirect('/home') : redirect('/');
    }

    public function logOut(Request $request)
    {
        $this->authService->logOut();
        return redirect('/');
    }
}
