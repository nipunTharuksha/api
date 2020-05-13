<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_appointments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')->references('id')->on('appointments');

            //Basic details
            $table->string('name');
            $table->string('email');
            $table->enum('is_patient', ['yes', 'no', 'unsure']);
            $table->string('mobile_number');
            $table->string('type_of_issue'); // What type of issue would you like to discuses
            $table->longText('describe')->nullable(true);

            //Medical history
            $table->enum('currently_receiving_treatments', ['yes', 'no']);
            $table->enum('currently_suffering_from_health_conditions', ['yes', 'no']);
            $table->enum('are_you_pregnant', ['yes', 'no']);
            $table->enum('diagnosed_with_covid19', ['yes', 'no']);
            $table->enum('currently_isolating', ['yes', 'no']);

            //Survay
            $table->string('what_do_you_like');

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
        Schema::dropIfExists('live_appointments');
    }
}
