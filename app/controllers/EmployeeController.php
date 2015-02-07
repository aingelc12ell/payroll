<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::all();
		return View::make('employee.index', array('employees'=>$employees));
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
		        'firstname' => 'required|max:255',
		        'middlename' => 'max:255',
				'lastname' => 'required|max:255'
		    ]);

		    if ($v->fails())
		    {
		        return Redirect::to('employees/create')->withErrors($v)->withInput(Input::get());
		    }
			else
			{
				$e =  new Employee;
				$e->firstname = Input::get('firstname');
				$e->middlename = Input::get('middlename');
				$e->lastname = Input::get('lastname');
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
