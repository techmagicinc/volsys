<?php namespace seniorproject\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;
use Laracasts\Commander\Events\EventGenerator;
use seniorproject\Registration\Events\UserRegistered;

class User extends Eloquent {

	Use EventGenerator;

	/*
	 * Which fields may be mass assigned?
	 */
	protected $fillable = ['firstName', 'lastName', 'email', 'category'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
//	protected $hidden = array('password', 'remember_token');
//
//	/**
//	 * Passwords must be hashed
//	 * @param $password
//	 */
//	public function setPasswordAttribute($password)
//	{
//		$this->attributes['password'] = Hash::make($password);
//	}


	/**
	 * Register a new user
	 *
	 * @param $firstName
	 * @param $lastName
	 * @param $email
	 * @param $category
	 * @return static
	 */
	public static function register($firstName, $lastName, $email, $category) {
		$user = new static(compact('firstName', 'lastName', 'email', 'category'));

		$user->raise(new UserRegistered($user));

		return $user;
	}

}
