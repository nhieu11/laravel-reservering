<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('flight_id')->unsigned();
            $table->integer('passenger_id')->unsigned();
            $table->integer('cost_id')->unsigned();
           
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            $table->foreign('flight_id')->references('id')->on('flight')->onDelete('cascade');
            $table->foreign('cost_id')->references('id')->on('cost')->onDelete('cascade');
            $table->foreign('passenger_id')->references('id')->on('passenger')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booking');
    }
}
