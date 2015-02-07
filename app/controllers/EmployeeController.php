<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('employee.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employee.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$v = Validator::make(Input::all(), [
		        'txtFirstName' => 'required|max:255',
		        'txtMiddleName' => 'max:255',
				'txtLastName' => 'required|max:255'
		    ]);

		    if ($v->fails())
		    {
		        return Redirect::to('employee.create')->withErrors($v);
		    }
			else
			{
				$e =  new Employee;
				$e->firstname = Input::post('txtFirstName');
				$e->middlename = Input::post('txtMiddleName');
				$e->firstname = Input::post('txtLastName');
				$e->save();
					
				return View::make('employee.store');
			}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('employee.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('employee.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return View::make('employee.update');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return View::make('employee.delete');
	}


}
