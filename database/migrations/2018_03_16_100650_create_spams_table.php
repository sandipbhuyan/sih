<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time');
            $table->string('sender_id');
            $table->string('reciever_id');
            $table->string('subject');
            $table->string('body');
            $table->string('attachment_size');
            $table->string('attachment_format');
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
        Schema::dropIfExists('spams');
    }
}