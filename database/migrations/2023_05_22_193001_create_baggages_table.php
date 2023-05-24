<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaggagesTable extends Migration
{
    public function up()
    {
        Schema::create('baggages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id');
            $table->string('baggage_number')->unique();
            $table->timestamps();

            $table->foreign('ticket_id')->references('id')->on('tickets');
        });
    }

    public function down()
    {
        Schema::dropIfExists('baggages');
    }
}

