<?php

class volunteercontroller extends \BaseController {

    public $restful = true;

    public function __construct(volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $volunteer = $this->volunteer->all();
        return View::make('pages.volunteer',['volunteer' => $volunteer]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

        if ($this->volunteer->fill($input)->isValid())
        {
           // $this->volunteer->save();
            return 'success';
        }

        return Redirect::back()->withInput()->withErrors($this ->volunteer->messages);
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


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
