<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'userid'=>'sc8840',
            'username'=>'Kasun Rathnayake',
            'role'=>'admin',
            'faculty'=>'',
            'password'=>bcrypt('12345'),
            'picurl'=>'images/users/sc8840.jpg',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
            'userid'=>'st0001',
            'username'=>'Mr.P.N. Weerasinghe',
            'role'=>'director',
            'faculty'=>'',
            'password'=>bcrypt('12345'),
            'picurl'=>'images/users/st0001.jpg',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
            'userid'=>'st0002',
            'username'=>'Mr.J.P. Anusha De Silva',
            'role'=>'instructor',
            'faculty'=>'',
            'password'=>bcrypt('12345'),
            'picurl'=>'images/users/st0002.jpg',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
        'userid'=>'sc8715',
        'username'=>'Gayashani Nuwanthika',
        'role'=>'faculty_cap',
        'faculty'=>'Science',
        'password'=>bcrypt('12345'),
        'picurl'=>'images/users/sc8715.jpg',
        'created_at'=>date('Y-m-d H:m:s'),
        'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
        'userid'=>'sc8751',
        'username'=>'Samitha Gunawardana',
        'role'=>'team_cap',
        'faculty'=>'Management',
        'password'=>bcrypt('12345'),
        'picurl'=>'images/users/sc8751.jpg',
        'created_at'=>date('Y-m-d H:m:s'),
        'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
        'userid'=>'sc8753',
        'username'=>'Wasula Salinda',
        'role'=>'player',
        'faculty'=>'HSS',
        'password'=>bcrypt('12345'),
        'picurl'=>'images/users/sc8753.jpg',
        'created_at'=>date('Y-m-d H:m:s'),
        'updated_at'=>date('Y-m-d H:m:s')
    ));
        DB::table('users')->insert(array(
        'userid'=>'sc8804',
        'username'=>'osanda kalpitha',
        'role'=>'player',
        'faculty'=>'sci',
        'password'=>bcrypt('12345'),
        'picurl'=>'images/users/sc8804.jpg',
        'created_at'=>date('Y-m-d H:m:s'),
        'updated_at'=>date('Y-m-d H:m:s')
    ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('userid','=','st0001')->delete();
        DB::table('users')->where('userid','=','st0002')->delete();
        DB::table('users')->where('userid','=','sc8840')->delete();
        DB::table('users')->where('userid','=','sc8715')->delete();
        DB::table('users')->where('userid','=','sc8751')->delete();
        DB::table('users')->where('userid','=','sc8753')->delete();
    }
}
