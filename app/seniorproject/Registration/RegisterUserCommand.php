<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/6/15
 * Time: 12:50 PM
 */

namespace seniorproject\Registration;


class RegisterUserCommand {
    public $firstName;
    public $lastName;
    public $email;
    public $category;

    function __construct($firstName, $lastName, $email, $category)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->category = $category;
    }


}