<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Volunteers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('volunteers', function($newtable)
        {
            $newtable->increments('id');
            $newtable->string('firstname');
            $newtable->string('lastname');
            $newtable->string('category');
            $newtable->datetime('timeIn');
            $newtable->datetime('timeOut');
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
        Schema::drop('volunteers');
	}

}