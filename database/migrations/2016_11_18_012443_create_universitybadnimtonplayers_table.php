<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitybadnimtonplayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitybadnimtonplayers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('approval');
            $table->string('user_userid');
            $table->string('name');
            $table->string('faculty');
            $table->string('level');
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
        Schema::drop('universitybadnimtonplayers');
    }
}
