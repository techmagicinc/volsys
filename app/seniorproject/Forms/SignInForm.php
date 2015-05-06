<?php namespace seniorproject\Forms;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/5/15
 * Time: 2:38 PM
 */

/*
 * Validation rules for the login form
 */
class SignInForm extends FormValidator {
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];
}