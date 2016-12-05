<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryformPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entryformplayers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entryform_id');
            $table->string('name');
            $table->string('user_id');
            $table->string('role');
            $table->integer('rating');
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
        Schema::drop('entryformplayers');
    }
}
