<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentFormRequest;
use App\Services\AppointmentService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    protected $appointmentService;

    function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function getAppointmentView()
    {
        return view('appointment');
    }

    public function save(AppointmentFormRequest $request)
    {

        $result = ['status' => 200, 'success' => true, 'message' => __('appointment.save')];

        $validatedAttributes = $request->validated();

        $this->appointmentService->save($validatedAttributes);

        return response()->json($result, $result['status']);
    }
}
