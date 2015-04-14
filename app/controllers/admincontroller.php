<?php

class admincontroller extends \BaseController {



    public $restful = true;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        if(Auth::check()) return Redirect::to(edit.index);

        return View::make('pages.login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


        $credentials = Input::only('username','password');


             if (Auth::attempt($credentials))
             {
                 return Redirect::to('maintenance');
             }

             return Redirect::back()->withInput();


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}



	public function destroy()
	{
            Auth::logout();
            return View::make('pages.logout');

	}


}
