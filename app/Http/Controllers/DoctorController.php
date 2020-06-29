<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;
use Session;

class DoctorController extends Controller
{
    protected $patientService;
    public function __construct(PatientService $patientService)
    {
        $this->middleware('auth');
        $this->patientService = $patientService;
    }

    public function viewPage()
    {
        $data['record_number'] = Session::get('rec');
        $details = $this->patientService->checkTag($data);
        return view('doctor.viewPage', compact('details'));
    }

    public function getNurseInput($num)
    {
        $data['record_number'] = $num;
        $details = $this->patientService->checkTag($data);
        return view('doctor.getNurseInput', compact('details'));
    }

    public function addHistory()
    {
        return view('doctor.addHistory');
    }

}