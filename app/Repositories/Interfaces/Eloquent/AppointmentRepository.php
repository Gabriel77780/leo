<?php

namespace App\Repositories\Interfaces\Eloquent;

interface AppointmentRepository
{
    public function save(array $attributes);

    public function findAll();
}
