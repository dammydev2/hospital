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
        return $this->patient->orderBy('patient_number', 'desc')->paginate(30);
    }

    public function enterPatientDetails(array $credentials)
    {
        return $this->patient->insert([
            'first_name'  => $credentials['first_name'],
            'middle_name' => $credentials['middle_name'],
            'surname' => $credentials['surname'],
            'patient_number' => $credentials['patient_number'],
            'gender' => $credentials['gender'],
            'address' => $credentials['address'],
            'email' => $credentials['email'],
            'telephone' => $credentials['telephone'],
            'domicile' => $credentials['domicile'],
            'nationality' => $credentials['nationality'],
            'occupation' => $credentials['occupation'],
            'dob' => $credentials['dob'],
            'blood_group' => $credentials['blood_group'],
            'genotype' => $credentials['genotype'],
            'sensitivity' => $credentials['sensitivity'],
            'religion' => $credentials['religion'],
            'next_of_kin' => $credentials['next_of_kin'],
            'relationship' => $credentials['relationship'],
            'sex' => $credentials['sex'],
            'kin_address' => $credentials['kin_address'],
            'kin_email' => $credentials['kin_email'],
            'kin_phone' => $credentials['kin_phone'],
        ]);
    }
}
