<?php


use seniorproject\Forms\SignInForm;

class SessionsController extends \BaseController {

    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;
        $this->beforeFilter('guest', ['except' => 'destroy']);
    }

    /**
     * Show the form for signing in
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $formData = Input::only('email', 'password');
        $this->signInForm->validate($formData);

        if(Auth::attempt($formData))
        {
            Flash::message('Welcome back!');
            return Redirect::intended('admin');
        }
        else {
            dd($formData);
        }

    }

    /**
     * log a user out
     * @return mixed
     */
    public function destroy() {
        Auth::logout();
        return View::make('pages.login');

        Flash::message('You have been logged out!');
    }

}