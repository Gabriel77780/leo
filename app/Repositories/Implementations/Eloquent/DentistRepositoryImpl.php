<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Repositories\Interfaces\Eloquent\DentistRepository;
use App\Models\Dentist;

class DentistRepositoryImpl implements DentistRepository
{
    public function save(array $attributes)
    {
        $dentist = new Dentist();
        $dentist->fill($attributes);
        return $dentist->save();
    }

    public function findOne($id)
    {
        return Dentist::where('id', $id)->first();
    }

    public function findAll()
    {
        return Dentist::get();
    }
}
