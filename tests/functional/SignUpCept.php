<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a volunteer account');

$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('First Name:', 'John');
$I->fillField('Last Name:', 'Doe');
$I->fillField('Email:', 'john@example.com');
//$I->fillField('Category', 'Doctor');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to the Volunteer Management System!');
$I->seeRecord('users', [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'email' => 'john@example.com'
]);

//$I->assertTrue(Auth::check());