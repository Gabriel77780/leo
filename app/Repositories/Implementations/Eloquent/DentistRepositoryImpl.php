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
}
