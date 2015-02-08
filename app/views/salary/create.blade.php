@extends('layouts.page')

@section('content')
	@if($errors->has())
		<div class="alert alert-warning" role="alert">Please check the form for errors</div>
	@endif
	
	{{ Form::open(array('route' => 'salary.store')) }}
	
  <div class="form-group @if($errors->has('taxstatus'))
	  						has-warning
						@endif">
    <label for="civilstatus">Tax Status</label>
	{{ Form::select('taxstatus', array('single' => 'Single', 'Married' => 'Married', 'widow' => 'Widow'),
		null, array('class'=> 'form-control')) }}
	
	@if($errors->has('taxstatus'))
		<span class="help-inline">{{ $errors->first('taxstatus') }}</span>
	@endif
  </div>
  
   
   <div class="form-group 
	  					@if($errors->has('is_minimum_wage'))
		  					has-warning
						@endif
		  	">
	    <label for="employee_number">Minimum Wage</label>
		{{ Form::text('is_minimum_wage', null, array('class'=>'form-control', 'placeholder' => 'is a Minimum wage earner?')) }}
		@if($errors->has('is_minimum_Wage'))
			<span class="help-inline">{{ $errors->first('is_minimum_wage') }}</span>
		@endif
	  </div>
	  
	  
	  <div class="input-group 
	  					@if($errors->has('firstname'))
		  					has-warning
						@endif
		  	">
		<span class="input-group-addon">PHP</span>
		{{ Form::text('basic', null, array('class'=>'form-control', 'placeholder' => 'Basic Salary')) }}
		@if($errors->has('basic'))
			<span class="help-inline">{{ $errors->first('basic') }}</span>
		@endif
		 <span class="input-group-addon">.00</span>
	  </div>
	  
	  <div class="form-group @if($errors->has('de_minimis_total'))
		  						has-warning
							 @endif">
							 
	    <label for="txtMiddleName">De Minimis Total</label>	    
		{{ Form::text('de_minimis_total', null, array('class'=>'form-control', 'placeholder' => 'De Minimis Total')) }}
		
		@if($errors->has('de_minimis_total'))
			<span class="help-inline">{{ $errors->first('de_minimis_total') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('sss_contribution'))
		  						has-warning
							@endif">
	    <label for="txtLastName">SSS Contribution</label>
		
		{{ Form::text('sss', null, array('class'=>'form-control', 'placeholder' => 'SSS Contribution')) }}
		
		@if($errors->has('sss'))
			<span class="help-inline">{{ $errors->first('sss') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('philhealth'))
		  						has-warning
							@endif">
	    <label for="birthdate">PhilHealth</label>
		
		{{ Form::text('philhealth', null, array('class'=>'form-control', 'placeholder' => 'Enter PhilHealth')) }}
		
		@if($errors->has('philhealth'))
			<span class="help-inline">{{ $errors->first('philhealth') }}</span>
		@endif
	  </div>
	  
	  
	  <div class="form-group @if($errors->has('pagibig'))
		  						has-warning
							@endif">
	    <label for="birthdate">Pag-ibig Contribution</label>
		
		{{ Form::text('pagibig', null, array('class'=>'form-control', 'placeholder' => 'Pagibig Contribution')) }}
		
		@if($errors->has('pagibig'))
			<span class="help-inline">{{ $errors->first('pagibig') }}</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop