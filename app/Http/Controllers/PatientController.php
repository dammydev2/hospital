<?php

namespace App\Http\Controllers;


use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected $patientService;
    public function __construct(PatientService $patientService)
    {
        $this->middleware('auth');
        $this->patientServices = $patientService;
    }

}
