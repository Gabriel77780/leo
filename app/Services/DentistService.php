<?php

namespace App\Services;

use App\Repositories\Interfaces\Eloquent\DentistRepository;
use App\Services\UserService;

class DentistService
{

    protected $dentistRepository;
    protected $userService;

    function __construct(DentistRepository $dentistRepository, UserService $userService)
    {
        $this->dentistRepository = $dentistRepository;
        $this->userService = $userService;
    }

    public function save($attributes)
    {

        $attributes['user_id'] = $this->userService->save($attributes['email'], $attributes['identification'], 'DENTIST');

        return $this->dentistRepository->save($attributes);
    }

    public function findOne($id)
    {
        return $this->dentistRepository->findOne($id);
    }

    public function findAll()
    {
        return $this->dentistRepository->findAll();
    }
}
