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
				'employee_number' => 'required|max:255',
		        'firstname' => 'required|max:255',
		        'middlename' => 'max:255',
				'lastname' => 'required|max:255',
				'gender' => 'max:255',
				'birthdate' => 'max:255',
				'civilstatus' => 'max:255',
				'phone' => 'max:255',
				'address' => 'max:255',
				'zip' => 'max:255',
				'email' => 'max:255'
		    ]);

		    if ($v->fails())
		    {
		        return Redirect::to('employees/create')->withErrors($v)->withInput(Input::get());
		    }
			else
			{
				$e =  new Employee;
				$e->employee_number = Input::get('employee_number');
				$e->firstname = Input::get('firstname');
				$e->middlename = Input::get('middlename');
				$e->lastname = Input::get('lastname');
				$e->gender = Input::get('gender');
				$e->birthdate = Input::get('birthdate');
				$e->civilstatus = Input::get('civilstatus');
				$e->phone = Input::get('phone');
				$e->address = Input::get('address');
				$e->zip = Input::get('zip');
				$e->email = Input::get('email');
				
				$e->save();
					
				return View::make('employee.store', 'id'=> $e->id);
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
