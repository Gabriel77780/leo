<?php

namespace App\Repositories\Implementations\Eloquent;

use App\Repositories\Interfaces\Eloquent\AppointmentRepository;
use App\Models\Appointment;
use App\Models\Dentist;
use Illuminate\Support\Facades\Auth;

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

    public function findAllByDentist()
    {
        $dentist = Dentist::where('user_id', Auth::id())->first();

        return Appointment::where('dentist_id', $dentist->id)->get();
    }
}
