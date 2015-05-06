<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 4/6/15
 * Time: 7:47 PM
 */

namespace seniorproject\Admin;


class AdminRepository {
    public function save(Admin $admin) {
        return $admin->save();
    }
}