<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('dentist_id');
            $table->date('date');
            $table->time('time', 2);
            $table->boolean('finished');
            $table->timestamps();
        });

        Schema::table('appointment', function (Blueprint $table) {
            $table->foreign('patient_id')->references('id')->on('patient');
            $table->foreign('dentist_id')->references('id')->on('dentist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
