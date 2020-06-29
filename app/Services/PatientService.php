<?php

namespace App\Services;

use App\User;
use App\Patient;
use App\NurseCare;
use Session;

class PatientService
{
    protected $user, $patient, $nurseCare;
    public function __construct(User $user, Patient $patient, NurseCare $nurseCare)
    {
        $this->user = $user;
        $this->patient = $patient;
        $this->nurseCare = $nurseCare;
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

    public function getAllPatient()
    {
        return $this->patient->orderBy('patient_number', 'desc')->get();
    }

    public function getLastRec()
    {
        return $this->nurseCare->orderBy('id', 'desc')->get('rec')->first();
    }

    public function getPatientInfo($patient_num)
    {
        return $this->patient->where('patient_number', $patient_num)->first();
    }

    public function enterNurseInput(array $credentials)
    {
        return $this->nurseCare->create([
            'patient_number' => Session::get('patient_num'),
            'rec' => Session::get('rec'),
            'patient_name' => $credentials['patient_name'],
            'time' => $credentials['time'],
            'temp' => $credentials['temp'],
            'palse' => $credentials['palse'],
            'weight' => $credentials['weight'],
            'height' => $credentials['height'],
            'BMI' => $credentials['BMI'],
            'SPO2' => $credentials['SPO2'],
            'autenticator' => \Auth::User()->id,
        ]);
    }

    public function checkTag(array $credentials)
    {
        return $this->nurseCare->where('rec', $credentials['record_number'])->first();
    }
}
