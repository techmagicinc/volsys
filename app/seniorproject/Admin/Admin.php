<?php namespace seniorproject\Admin;

/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 4/6/15
 * Time: 5:57 PM
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;
class Admin extends \Eloquent implements UserInterface, RemindableInterface


{
    Use UserTrait, RemindableTrait;
    /**
     * fillable fields for Admin
     */
    protected $fillable = ['email', 'password'];

    protected $table = 'admin';

    protected $hidden = array('password', 'remember_token');

    /**
     * Hash admin password
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public static function registerAdmin($email, $password) {
        $admin = new static(compact('email', 'password'));

        //$user->raise(new UserRegistered($user));

        return $admin;
    }
}