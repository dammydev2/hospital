<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected $patientService;
    public function __construct(PatientService $patientService)
    {
        $this->middleware('auth');
        $this->patientService = $patientService;
    }

    public function Patient()
    {
        $patient = $this->patientService->allPatient();
        return view('patient.patient', compact('patient'));
    }

    public function addPatient()
    {
        return view('patient.addPatient');
    }

    public function FunctionName(Request $request)
    {
        $request->validate([
            'first_name' => ['required','string'],
            'middle_name' => ['required','string'],
            'surname' => ['required','string'],
            'patient_number' => ['required','string'],
            'gender' => ['required','string'],
            'telephone' => ['required','string', 'min:11'],
            'telephone' => ['required','string'],
            'domicile' => ['required','string'],
            'nationality' => ['required','string'],
            'occupation' => ['required','string'],
            'dob' => ['required','string'],
            'blood_group' => ['required','string'],
            'genotype' => ['required','string'],
            'sensitivity' => ['required','string'],
            'religion' => ['required','string'],
            'next_of_kin' => ['required','string'],
            'relationship' => ['required','string'],
            'sex' => ['required','string'],
            'kin_address' => ['required','string'],
            'kin_phone' => ['required','string'],
        ]);
    }

}
