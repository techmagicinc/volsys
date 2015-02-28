<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Timestamp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('timestamp', function($newtable)
        {
            $newtable->increments('id');
            $newtable->timestamp('sign in');
            $newtable->timestamp('sign out');
            $newtable->string('flag');
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
        Schema::drop('timestamp');
    }

}