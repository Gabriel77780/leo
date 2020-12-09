<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DentistController extends Controller
{
    public function getDentistView()
    {
        return view('dentist');
    }
}
