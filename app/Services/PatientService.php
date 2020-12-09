<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\Eloquent\PatientRepository;
use App\Services\UserService;

class PatientService
{

    protected $patientRepository;
    protected $userService;

    function __construct(PatientRepository $patientRepository, UserService $userService)
    {
        $this->patientRepository = $patientRepository;
        $this->userService = $userService;
    }

    public function save($attributes)
    {


        $this->userService->save($attributes['email'], $attributes['identification']);

        return $this->patientRepository->save($attributes);;
    }
}
