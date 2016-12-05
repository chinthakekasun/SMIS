<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entryforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('approval');
            $table->string('faculty');
            $table->string('sport');
            $table->string('team');
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
        Schema::drop('entryforms');
    }
}
