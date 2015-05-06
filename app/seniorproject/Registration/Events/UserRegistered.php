<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/11/15
 * Time: 6:27 PM
 */

namespace seniorproject\Registration\Events;


use seniorproject\Users\User;

class UserRegistered {
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

}