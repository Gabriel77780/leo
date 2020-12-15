<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DentistFormRequest;
use App\Services\DentistService;

class DentistController extends Controller
{
    protected $dentistService;

    function __construct(DentistService $dentistService)
    {
        $this->dentistService = $dentistService;
    }

    public function getDentistView()
    {
        return view('dentist');
    }

    public function save(DentistFormRequest $request)
    {

        $result = ['status' => 200, 'success' => true, 'message' => __('dentist.save')];

        $validatedAttributes = $request->validated();

        $this->dentistService->save($validatedAttributes);

        return response()->json($result, $result['status']);
    }

    public function all()
    {
        return $this->dentistService->findAll();
    }
}
