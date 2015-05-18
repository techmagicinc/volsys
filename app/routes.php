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

//Route::get('/', function() {
	//return View::make('home');
//});

//Route::get('/', [
  //  'as' => 'home',
  //  'uses' => 'PagesController@home'
//]);

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

Route::get('logout', [
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

//-------------------------------------------------------------------------------

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
Route::get('/', array('uses' => 'UsersController@get_dashboard'));

Route::get('main', array('uses' => 'EmployeesController@get_home'));

Route::get('dashboard', array('uses' => 'UsersController@get_dashboard'));

Route::get('getdata', array('uses' => 'EmployeesController@get_listEmployees'));

Route::get('authenticate', array('uses' => 'EmployeesController@post_authenticate'));

Route::get('savework', array('uses' => 'EmployeesController@post_SaveStartWork'));

Route::post('stopwork', array('uses' => 'EmployeesController@post_SaveStopWork'));

Route::get('employeeActions', array('uses' => 'EmployeesController@get_employeeActions'));

Route::get('registration', function()
{
    return View::make('registration');
});

Route::post('registration', array('before' => 'csrf',
    function()
    {
        $rules = array(
            'password' => 'required'
        );

        $validation = Validator::make(Input::all(), $rules);
        if ($validation->fails())
        {
            return Redirect::to('registration')->withErrors
            ($validation)->withInput();
        }
        $user = new User;
        $user->password = Hash::make(Input::get('password'));
        $user->firstname = Input::get('name');
        $user->lastname = Input::get('lastname');
        $user->admin = Input::get('admin') ? 1 : 0;
        if ($user->save())
        {
            Auth::loginUsingId($user->id);
            return Redirect::to('profile');
        }
        return Redirect::to('registration')->withInput();
    }));