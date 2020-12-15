<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Repositories\Interfaces\Eloquent\AppointmentRepository;
use App\Models\Appointment;

class AppointmentRepositoryImpl implements AppointmentRepository
{
    public function save(array $attributes)
    {
        $appointment = new Appointment();
        $appointment->fill($attributes);
        return $appointment->save();
    }

    public function findAll()
    {
        return Appointment::get();
    }
}
