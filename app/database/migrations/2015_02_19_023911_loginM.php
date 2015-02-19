<?php

use Illuminate\Database\Migrations\Migration;

class LoginM extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {

        Schema::create('login', function($newtable)
        {
            $newtable->increments('id');
            $newtable->string('username');
            $newtable->string('password');
            $newtable->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('login');
    }


}