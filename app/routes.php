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

//Route::get('/', [
  //  'as' => 'home',
  //  'uses' => 'PagesController@home'
//]);

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


Route::get('Login','admincontroller@create');
//Route::get('Logout', 'admincontroller@destroy');

Route::get('Logout', [
    'as' => 'logout_path',
    'uses' => 'SessionsController@destroy'
]);

Route::resource('admin','admincontroller');

Route::get('adminlogin', [
    'as' => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('adminlogin', [
    'as' => 'login_path',
    'uses' => 'SessionsController@store'
]);


Route::get('Maintenance', 'maintenancecontroller@index');
array( 'before' => 'auth' ,

Route::resource('edit','maintenancecontroller'));

Route::post('search', array('before'=>'csrf', 'uses'=>'maintenancecontroller@search'));
Route::get('results/(:all)', array('uses'=>'maintenancecontroller@results'));

Route::resource('Volunteer', 'volunteercontroller');

/*
 * Registration
 */
Route::get('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);

/**
 * hidden admin registration
 */
Route::get('adminregistration', [
    'as' => 'adminregistration_path',
    'uses' => 'AdminRegistrationController@create'
]);

Route::post('adminregistration', [
    'as' => 'adminregistration_path',
    'uses' => 'AdminRegistrationController@store'
]);

Route::get('Construction', function() {
    return View::make('pages.construction');
});