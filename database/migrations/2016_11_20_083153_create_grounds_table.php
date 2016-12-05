<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groundbookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('approval');
            $table->string('venue');
            $table->string('date');
            $table->string('stime');
            $table->string('etime');
            $table->string('faculty');
            $table->string('sport');
            $table->string('requestedby');
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
        Schema::drop('groundbookings');
    }
}
