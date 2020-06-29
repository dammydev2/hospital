<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/index', 'StartController@index');
Route::get('/start', 'StartController@firstPage');
Route::post('/database_form', 'StartController@database_form');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient', 'PatientController@patient')->name('patient');
Route::get('/doctor/viewPage', 'DoctorController@viewPage');
Route::get('doctor/getNurseInput/{rec}', 'DoctorController@getNurseInput');
Route::get('doctor/addHistory', 'DoctorController@addHistory');
Route::get('patient/nurseCare', 'PatientController@nurseCare')->name('patient/nurseCare');
Route::get('patient/addPatient', 'PatientController@addPatient')->name('patient/addpatient');
Route::get('patient/addCare', 'PatientController@addCare')->name('patient/addCare');
Route::get('patient/doctorCheck', 'PatientController@doctorCheck')->name('patient/doctorCheck');
Route::post('patient/enterPatient', 'PatientController@enterPatient')->name('patient/enterPatient');
Route::post('patient/enterCare', 'PatientController@enterCare')->name('patient/enterCare');
Route::post('patient/nurseInput', 'PatientController@nurseInput')->name('patient/nurseInput');
Route::post('patient/searchTag', 'PatientController@searchTag')->name('patient/searchTag');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');