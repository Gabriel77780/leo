<?php

namespace App\Services;

use App\Models\Patient;

class PatientService
{

    public function save($patientP)
    {

        $patient = new Patient();
        /* patient->identificationTypeId = $patientP[""];
        $patient->identification = $patientP[""];
        $patient-> = $patientP[""];
        $patient-> = $patientP[""];
        $patient-> = $patientP[""];
        $patient-> = $patientP[""];
        $patient-> = $patientP[""];  */
        $patient->fill($patientP);
        return $patient->save();
    }
}
