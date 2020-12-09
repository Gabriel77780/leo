<?php

namespace App\Repositories;

use App\Repositories\Interfaces\Eloquent\UserRepository;
use App\Models\User;

class UserRepositoryImpl implements UserRepository
{

    public function save()
    {

        $user = new User();

        $user->save();
    }
}
