<?php

use seniorproject\Core\CommandBus;
use seniorproject\AdminRegistration\RegisterAdminCommand;
use seniorproject\Forms\AdminRegistrationForm;
class AdminRegistrationController extends \BaseController {


	use CommandBus;
	/**
	 * @var CommandBus
	 */

	/**
	 * @var AdminRegistrationForm
	 */
	private $adminRegistrationForm;

	/**
	 * @var RegistrationForm
	 */
	function __construct(AdminRegistrationForm $adminRegistrationForm)
	{
		//$this->commandBus = $commandBus;
		$this->adminRegistrationForm = $adminRegistrationForm;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('adminregistration.create');
	}

	public function store()
	{
		$this->adminRegistrationForm->validate(Input::all());
		extract(Input::only('email', 'password'));

		$admin = $this->execute(
			new RegisterAdminCommand($email, $password)
		);

		Auth::login($admin);

		return Redirect::home();
	}

}
