<?php

namespace App\Services;

use App\Repositories\Interfaces\Eloquent\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{

    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function logIn($email, $password)
    {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }


    public function logOut()
    {
        Auth::logout();
    }

    public function save($email, $password)
    {
        return $this->userRepository->save($email, $password);
    }
}
