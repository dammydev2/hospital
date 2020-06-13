<?php

namespace App\Services;

use App\User;
use App\Patient;

class PatientService
{
    protected $user, $patient;
    public function __construct(User $user, Patient $patient)
    {
        $this->user = $user;
        $this->patient = $patient;
    }

    public function allPatient()
    {
        return $this->patient->orderBy('patient_number', 'desc')->get();
    }
    
}
