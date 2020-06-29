<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Services\PatientService;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

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

    public function enterPatient(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string'],
            'middle_name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patient_number' => ['required', 'string', 'unique:patients'],
            'address' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'telephone' => ['required', 'string', 'min:11'],
            'telephone' => ['required', 'string'],
            'domicile' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'blood_group' => ['required', 'string'],
            'genotype' => ['required', 'string'],
            'sensitivity' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'next_of_kin' => ['required', 'string'],
            'relationship' => ['required', 'string'],
            'sex' => ['required', 'string'],
            'kin_address' => ['required', 'string'],
            'kin_phone' => ['required', 'string'],
        ]);
        $this->patientService->enterPatientDetails($request->all());
        Session::flash('success', 'Patient Added successfully');
        return redirect('patient');
    }

    public function addCare()
    {
        $patient = $this->patientService->getAllPatient();
        return view('patient.addcare', compact('patient'));
    }

    public function enterCare(Request $request)
    {
        $getRec = $this->patientService->getLastRec();
        if ($getRec === null) {
            $lastRec = 1000;
        } else {
            $lastRec = $getRec->rec;
        }
        $newRec = $lastRec + 1;
        Session::put('patient_num', $request['patient_num']);
        Session::put('rec', $newRec);
        return redirect('patient/nurseCare');
    }

    public function nurseCare()
    {
        $patient_num = Session::get('patient_num');
        $getRec = $this->patientService->getPatientInfo($patient_num);
        return view('patient.nurseCare', compact('getRec'));
    }

    public function nurseInput(Request $request)
    {
        $request->validate([
            'temp' => 'required|string',
            'palse' => 'required|string',
            'weight' => 'required|string',
            'height' => 'required|string',
            'BMI' => 'required|string',
            'SPO2' => 'required|string',
        ]);
        $this->patientService->enterNurseInput($request->all());
        Session::flash('success', 'information added successfully');
        return redirect('patient/addCare');
    }

    public function doctorCheck()
    {
        return view('doctor.searchTag');
    }

    public function searchTag(Request $request)
    {
        $request->validate([
            'record_number' => 'required|numeric'
        ]);
        $confirmTag = $this->patientService->checkTag($request->all());
        if(!$confirmTag){
            Session::flash('error', 'record not found');
            return redirect('patient/doctorCheck');
        }
        Session::put('rec', $request['record_number']);
        return redirect('doctor/viewPage');
    }
}
