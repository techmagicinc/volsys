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
        Schema::create('timestamps', function($newtable)
        {
            $newtable->increments('id');
            $newtable->timestamp('signin');
            $newtable->timestamp('signout');
            $newtable->boolean('flag')->default(1);
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