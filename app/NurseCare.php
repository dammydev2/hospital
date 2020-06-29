<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseCare extends Model
{
    protected $fillable = [
        'patient_number',
        'patient_name',
        'rec',
        'time',
        'temp',
        'palse',
        'weight',
        'height',
        'BMI',
        'SPO2',
        'autenticator'
    ];
}
