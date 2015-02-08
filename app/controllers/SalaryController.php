<?php

class SalaryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salaries = Salary::all();
		return View::make('salary.index', array('salaries'=>$salaries));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('salary.create', array('id'=> Input::get('id')));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$v = Validator::make(Input::all(), [
	        'tax_status' => 'required|max:255',
	        'is_minimum_wage' => 'max:255',
			'basic_salary' => 'required|max:255',
			'de_minimis_total' => 'max:255',
			'sss_contribution' => 'max:255',
			'philhealth_contribution' => 'max:255',
			'pagibig_contribution' => 'max:255',
			'employee_id' => 'required'
		    ]);

	    if ($v->fails())
	    {
	        return Redirect::to('salary/create?id=' . Input::get('employee_id'))->withErrors($v)->withInput(Input::get());
	    }
		else
		{
			$e =  new Salary;
			$e->tax_status = Input::get('tax_status');
			$e->minimum_wage = Input::get('minimum_wage');
			$e->basic_salary = Input::get('basic_salary');
			$e->de_minimis_total = Input::get('de_minimis_total');
			$e->sss_contribution = Input::get('sss_contribution');
			$e->philhealth_contribution = Input::get('philhealth_contribution');
			$e->employee_id = Input::get('employee_id');
			
			$e->save();
				
			return View::make('salary.store');
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
