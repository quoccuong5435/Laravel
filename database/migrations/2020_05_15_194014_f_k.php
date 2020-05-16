<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking', function (Blueprint $table) {
           $table->foreign('hotel_id')->references('id')->on('hotel');
           $table->foreign('guest_id')->references('guest_id')->on('guest');
           $table->foreign('status_id')->references('id')->on('booking_status');
        });
        Schema::table('room_booked', function (Blueprint $table) {
           $table->foreign('room_id')->references('id')->on('room');
           $table->foreign('booking_id')->references('id')->on('booking');
        });
        Schema::table('room', function (Blueprint $table) {
           $table->foreign('hotel_id')->references('id')->on('hotel');
           $table->foreign('room_type_id')->references('id')->on('room_type');
           $table->foreign('room_status_id')->references('id')->on('room_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
