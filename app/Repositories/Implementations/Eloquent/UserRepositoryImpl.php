<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Repositories\Interfaces\Eloquent\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepositoryImpl implements UserRepository
{

    public function save($email, $password)
    {

        $user = new User();
        $user->name = '';
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        return $user->id;
    }
}
