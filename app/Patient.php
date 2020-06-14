<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'patient_number',
        'gender',
        'address',
        'email',
        'telephone',
        'domicile',
        'nationality',
        'occupation',
        'dob',
        'blood_group',
        'genotype',
        'sensitivity',
        'religion',
        'next_of_kin',
        'relationship',
        'sex',
        'kin_address',
        'kin_email',
        'kin_phone',
    ];
}
