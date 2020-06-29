<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_cares', function (Blueprint $table) {
            $table->id();
            $table->string('patient_number');
            $table->string('patient_name');
            $table->string('rec');
            $table->string('time');
            $table->string('temp');
            $table->string('palse');
            $table->string('weight');
            $table->string('height');
            $table->string('BMI');
            $table->string('SPO2');
            $table->string('autenticator');
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
        Schema::dropIfExists('nurse_cares');
    }
}
