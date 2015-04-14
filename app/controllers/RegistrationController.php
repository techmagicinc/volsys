<?php

use seniorproject\Core\CommandBus;
use seniorproject\Forms\RegistrationForm;
use seniorproject\Registration\RegisterUserCommand;

class RegistrationController extends BaseController {

    use CommandBus;

    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    /*
     * Constructor
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        //$this->beforeFilter('guest');
    }

    /**
     * Show a form to register a user.
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }

    /*
     * Create a new Volunteer user
     */
    public function store()
    {
        $this->registrationForm->validate(Input::all());
        extract(Input::only('firstName', 'lastName', 'email', 'category'));

        $user = $this->execute(
            new RegisterUserCommand($firstName, $lastName, $email, $category)
        );

        Flash::message('Thanks for Signing Up!');

        //Auth::login($user);
        return Redirect::home();
    }

}