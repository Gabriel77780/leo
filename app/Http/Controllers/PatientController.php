<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientFormRequest;
use App\Services\PatientService;

class PatientController extends Controller
{
    protected $patientService;

    function __construct(PatientService $patientService)
    {
        $this->patientService = $patientService;
    }

    public function getPatientView()
    {
        return view('patient');
    }

    public function save(PatientFormRequest $request)
    {

        $result = ['status' => 200, 'success' => true, 'message' => __('patient.save')];

        $validatedAttributes = $request->validated();

        $this->patientService->save($validatedAttributes);

        return response()->json($result, $result['status']);
    }
}
