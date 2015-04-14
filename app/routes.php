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

Route::get('Maintenance', function() {
    return View::make('pages.maintenance');
});

Route::resource('Mail', 'MailController');

Route::resource('edittime', 'edittimecontroller');

Route::get('EditTime', function() {
    return View::make('pages.edittime');
});


Route::get('Login','admincontroller@create');
Route::get('Logout', 'admincontroller@destroy');
Route::resource('admin','admincontroller');


Route::get('Maintenance', 'maintenancecontroller@index');
array( 'before' => 'auth' ,

Route::resource('edit','maintenancecontroller'));

Route::post('search', array('before'=>'csrf', 'uses'=>'maintenancecontroller@search'));
Route::get('results/(:all)', array('uses'=>'maintenancecontroller@results'));

Route::resource('Volunteer', 'volunteercontroller');

