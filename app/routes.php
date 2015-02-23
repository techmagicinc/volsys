<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('home');
});

Route::get('SignIn', function() {
    return View::make('pages.signin');
});

Route::get('NewProfile', function() {
    return View::make('pages.newprofile');
});

Route::get('ContactForm', function() {
    return View::make('pages.contactform');
});
