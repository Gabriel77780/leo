<?php

namespace App\Repositories\Interfaces\Eloquent;

interface UserRepository
{
    public function save($email, $password);
}
