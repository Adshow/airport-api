<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('origin_id');
            $table->unsignedBigInteger('destination_id');
            $table->string('flight_number')->unique();
            $table->dateTime('departure_datetime');
            $table->timestamps();

            $table->foreign('origin_id')->references('id')->on('airports');
            $table->foreign('destination_id')->references('id')->on('airports');
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
