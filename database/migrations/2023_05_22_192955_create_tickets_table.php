<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->string('passenger_name');
            $table->string('passenger_cpf')->unique();
            $table->date('passenger_birthdate');
            $table->decimal('total_price', 8, 2);
            $table->unsignedBigInteger('class_id');
            $table->timestamps();

            $table->foreign('flight_id')->references('id')->on('flights');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

