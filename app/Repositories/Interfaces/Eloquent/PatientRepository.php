<?php

namespace App\Repositories\Interfaces\Eloquent;

interface PatientRepository
{
    public function save(array $attributes);

    public function findAll();

    public function findOne($id);
}
