<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
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
            $this->userService->logIn(
                $request->input('email'),
                $request->input('password')
            );

        return $loggedIn ? redirect('/home') : redirect('/');
    }

    public function logOut(Request $request)
    {
        $this->userService->logOut();
        return redirect('/');
    }
}
