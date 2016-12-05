<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoolplayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poolplayers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('approval');
            $table->string('user_id');
            $table->string('name');
            $table->string('faculty');
            $table->string('level');
            $table->string('email');
            $table->string('tele');
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
        Schema::drop('poolplayers');
    }
}
