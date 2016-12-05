<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('appliedfor');
            $table->string('status');
            $table->string('name');
            $table->string('indexnumber');
            $table->string('level');
            $table->string('dateofbirth');
            $table->string('gender');
            $table->string('faculty');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('tele');
            $table->string('email');
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
        Schema::drop('candidates');
    }
}
