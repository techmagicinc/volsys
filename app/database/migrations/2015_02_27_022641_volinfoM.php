<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VolinfoM extends Migration {

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
            $newtable->string('fname');
            $newtable->string('lname');
            $newtable->string('category');
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
        Schema::drop('volinfo');
    }

}
