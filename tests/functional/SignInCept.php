<?php 
$I = new FunctionalTester($scenario);
$I->am('a Clinic Administrator');
$I->wantTo('login to the Admin account');

$I->amOnPage('/adminlogin');
$I->fillField('Email:', 'admin@example.com');
$I->fillField('Password:', 'password');
$I->click('Sign In');
//$I->SignIn();

$I->seeInCurrentUrl('/admin');

