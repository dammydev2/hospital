<?php

namespace App\Services;

use App\User;

class PatientService
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
