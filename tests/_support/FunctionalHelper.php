<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
    public function signIn()
    {
        $email = 'admin@example.com';
        $password = 'password';

        $this->haveAnAccount(compact('email', 'password'));

        $I = $this->getModule('Laravel4');

        $I->amOnPage('/adminlogin');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');
    }


    public function haveAnAccount($overrides = [])
    {
        TestDummy::create('seniorproject\Admin\Admin', $overrides);
    }
}
