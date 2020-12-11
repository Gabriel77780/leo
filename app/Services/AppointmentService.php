<?php

namespace App\Services;

use App\Repositories\Interfaces\Eloquent\AppointmentRepository;
use App\Services\UserService;

class AppointmentService
{

    protected $appointmentRepository;
    protected $userService;

    function __construct(AppointmentRepository $appointmentRepository, UserService $userService)
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->userService = $userService;
    }

    public function save($attributes)
    {

        $attributes['finished'] = false;
        return $this->appointmentRepository->save($attributes);
    }
}
