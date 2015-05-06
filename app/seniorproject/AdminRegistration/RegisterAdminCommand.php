<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 4/6/15
 * Time: 7:32 PM
 */

namespace seniorproject\AdminRegistration;


class RegisterAdminCommand {

    public $email;
    public $password;

    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }


}