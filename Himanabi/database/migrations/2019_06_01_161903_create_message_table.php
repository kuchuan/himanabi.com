<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->bigIncrements('messageid');
            $table->bigInteger('talkroomid');
            $table->timestampsTz();
            $table->boolean('users_toggle');
            $table->string('talk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
