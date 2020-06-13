<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->string('patient_number');
            $table->string('gender');
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('telephone');
            $table->string('domicile');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('dob');
            $table->string('blood_group');
            $table->string('genotype');
            $table->string('sensitivity');
            $table->string('religion');
            $table->string('next_of_kin');
            $table->string('relationship');
            $table->string('sex');
            $table->string('kin_address');
            $table->string('kin_email')->nullable();
            $table->string('kin_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
