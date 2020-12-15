<?php

namespace App\Services;

use App\Repositories\Interfaces\Eloquent\AppointmentRepository;
use App\Services\PatientService;
use App\Services\DentistService;
use App\Services\UserService;

class AppointmentService
{

    protected $appointmentRepository;
    protected $userService;
    protected $patientService;
    protected $dentistService;

    function __construct(
        AppointmentRepository $appointmentRepository,
        UserService $userService,
        PatientService $patientService,
        DentistService $dentistService
    ) {
        $this->appointmentRepository = $appointmentRepository;
        $this->userService = $userService;
        $this->patientService = $patientService;
        $this->dentistService = $dentistService;
    }

    public function save($attributes)
    {

        $attributes['finished'] = false;
        return $this->appointmentRepository->save($attributes);
    }

    public function findAll()
    {

        $appointmentsResponse = array();

        $appointments = $this->appointmentRepository->findAll();

        foreach ($appointments as $appointment) {

            $patient = $this->patientService->findOne($appointment['patient_id']);
            $dentist = $this->dentistService->findOne($appointment['dentist_id']);

            $object = [
                'patient' => $patient->name1 . ' ' . $patient->last_name1 . ' ' .  $patient->last_name2,
                'dentist' => $dentist->name1 . ' ' . $dentist->last_name1 . ' ' .  $dentist->last_name2,
                'date' => $appointment->date->format('d-m-Y'),
                'time' => $appointment->time
            ];

            array_push($appointmentsResponse, $object);
        }

        return $appointmentsResponse;
    }

    public function findAllByDentist()
    {

        $appointmentsResponse = array();

        $appointments = $this->appointmentRepository->findAllByDentist();

        foreach ($appointments as $appointment) {

            $patient = $this->patientService->findOne($appointment['patient_id']);
            $dentist = $this->dentistService->findOne($appointment['dentist_id']);

            $object = [
                'patient' => $patient->name1 . ' ' . $patient->last_name1 . ' ' .  $patient->last_name2,
                'dentist' => $dentist->name1 . ' ' . $dentist->last_name1 . ' ' .  $dentist->last_name2,
                'date' => $appointment->date->format('d-m-Y'),
                'time' => $appointment->time
            ];

            array_push($appointmentsResponse, $object);
        }

        return $appointmentsResponse;
    }
}
