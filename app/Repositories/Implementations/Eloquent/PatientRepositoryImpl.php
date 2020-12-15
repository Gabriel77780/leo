<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Repositories\Interfaces\Eloquent\PatientRepository;
use App\Models\Patient;

class PatientRepositoryImpl implements PatientRepository
{
    public function save(array $attributes)
    {
        $patient = new Patient();
        $patient->fill($attributes);
        return $patient->save();
    }

    public function findAll()
    {
        return Patient::get();
    }

    public function findOne($id)
    {
        return Patient::where('id', $id)->first();
    }
}
