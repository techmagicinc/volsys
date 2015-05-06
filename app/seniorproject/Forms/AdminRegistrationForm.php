<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 4/6/15
 * Time: 7:02 PM
 */

namespace seniorproject\Forms;

use Laracasts\Validation\FormValidator;

class AdminRegistrationForm extends FormValidator {

    /**
     * Validation rules for Admin registration form
     * @var array
     */
    protected $rules = [
        'email' => 'required|email|unique:admin',
        'password' => 'required|confirmed'
    ];
}