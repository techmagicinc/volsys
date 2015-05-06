<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/6/15
 * Time: 1:09 PM
 */

namespace seniorproject\Users;


class UserRepository {

    /**
     * Persist a user
     *
     * @param User $user
     * @return mixed
     */
    public function save(User $user) {
        return $user->save();
    }
}