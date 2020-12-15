<?php

namespace App\Repositories\Interfaces\Eloquent;

interface DentistRepository
{
    public function save(array $attributes);

    public function findOne($id);

    public function findAll();
}
