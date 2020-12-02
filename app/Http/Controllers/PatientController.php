<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

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
        $validated = $request->validated();
        //$patient = new Patient();
        //$patient->name1 = ''

        $this->patientService->save($validated);
        return redirect('/');
    }
}
