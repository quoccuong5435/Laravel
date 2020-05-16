<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('guest_id');
            $table->string('fullname_guest');
            $table->string('firstname_guest');
            $table->string('lastname_guest');
            $table->string('avatar_guest');
            $table->string('gender_guest');
            $table->string('email_guest');
            $table->string('address_guest');
            $table->string('password_guest');
            $table->integer('phone_guest');
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
        Schema::dropIfExists('guest');
    }
}
