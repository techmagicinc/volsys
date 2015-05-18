<?php

class maintenancecontroller extends \BaseController {

    public $restful=true;

    public function __construct(employee $emp)
    {
        $this-> Employee = $emp;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $emps = $this->Employee->all();
        return View::make('pages.maintenance',['emps' => $emps]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($keyword)
	{
        return View::make(pages.results)
            ->with('results',Employee::search($keyword));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $keyword = Input::get('keyword');
        if(empty($keyword)){
            return Redirect::back()
                ->with('message','No keyword entered, please try again');
        }
        return Redirect::to('results/'.$keyword);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$emp = $this->Employee->find($id);
        return View::make('pages.volunteer', ['emp' => $emp]);
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

    public function get_results($keyword)
    {


    }

    public function post_search()
    {

    }


}
