<?php

namespace App\Services;

use App\Repositories\Interfaces\Eloquent\PatientRepository;

class PatientService
{

    protected $patientRepository;

    function __construct(PatientRepository $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    public function save($attributes)
    {

        return $this->patientRepository->save($attributes);;
    }
}
