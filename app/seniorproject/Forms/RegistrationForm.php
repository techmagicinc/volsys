<?php namespace seniorproject\Forms;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/5/15
 * Time: 2:38 PM
 */

/*
 * Validation rules for the registration form
 */
class RegistrationForm extends FormValidator {
    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email|unique:users'
//        'category' => 'required'
    ];
}