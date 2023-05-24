<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->string('class_type');
            $table->integer('seat_capacity');
            $table->decimal('seat_price', 8, 2);
            $table->timestamps();

            $table->foreign('flight_id')->references('id')->on('flights');
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
