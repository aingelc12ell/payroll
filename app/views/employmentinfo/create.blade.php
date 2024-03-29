@extends('layouts.page')

@section('content')
	@if($errors->has())
	  <div class="alert alert-warning" role="alert">
	   <ul>
	   @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	  @endforeach
  	  </ul>
  	  </div>
	@endif
	
	{{ Form::open(array('route' => 'salary.store')) }}
	<input type="hidden" name="employee_id" value="{{ $id }}">
  <div class="form-group @if($errors->has('tax_status'))
	  						has-warning
						@endif">
    <label for="civilstatus">Tax Status</label>
	{{ Form::select('tax_status', array('single' => 'Single', 'Married' => 'Married', 'widow' => 'Widow'),
		null, array('class'=> 'form-control')) }}
	
	@if($errors->has('tax_status'))
		<span class="help-inline">{{ $errors->first('tax_status') }}</span>
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
	  
	  <div class="form-group">
	  <div class="input-group 
	  					@if($errors->has('firstname'))
		  					has-warning
						@endif
		  	">
		<span class="input-group-addon">Basic Salary</span>
		{{ Form::text('basic_salary', null, array('class'=>'form-control', 'placeholder' => 'Basic Salary')) }}
		@if($errors->has('basic_salary'))
			<span class="help-inline">{{ $errors->first('basic_salary') }}</span>
		@endif
		 <span class="input-group-addon">.00</span>
	  </div>
  	  </div>
	  
	  <div class="form-group">
	  <div class="input-group @if($errors->has('de_minimis_total'))
		  						has-warning
							 @endif">
							 
	    <span class="input-group-addon">De Minimis Total</span>	    
		{{ Form::text('de_minimis_total', null, array('class'=>'form-control', 'placeholder' => 'De Minimis Total')) }}
		
		@if($errors->has('de_minimis_total'))
			<span class="help-inline">{{ $errors->first('de_minimis_total') }}</span>
		@endif
		<span class="input-group-addon">.00</span>
	  </div>
  	  </div>
	  
	  
	  <div class="form-group">
	  <div class="input-group @if($errors->has('sss_contribution'))
		  						has-warning
							@endif">
	    <span class="input-group-addon">SSS Contribution</span>
		{{ Form::text('sss_contribution', null, array('class'=>'form-control', 'placeholder' => 'SSS Contribution')) }}
		
		@if($errors->has('sss_contribution'))
			<span class="help-inline">{{ $errors->first('sss_contribution') }}</span>
		@endif
		<span class="input-group-addon">.00</span>
	  </div>
  	  </div>
	  
	  <div class="form-group">
	  <div class="input-group @if($errors->has('philhealth'))
		  						has-warning
							@endif">
		<span class="input-group-addon">Philhealth Contribution</span>
		{{ Form::text('philhealth_contribution', null, array('class'=>'form-control', 'placeholder' => 'Enter PhilHealth')) }}
		
		@if($errors->has('philhealth_contribution'))
			<span class="help-inline">{{ $errors->first('philhealth_contribution') }}</span>
		@endif
		<span class="input-group-addon">.00</span>
	  </div>
  	  </div>
	  
	  
	  <div class="form-group">
	  <div class="input-group @if($errors->has('pagibig'))
		  						has-warning
							@endif">
	    <span class="input-group-addon">Pag-ibig Contribution</span>	
		{{ Form::text('pagibig', null, array('class'=>'form-control', 'placeholder' => 'Pagibig Contribution')) }}
		
		@if($errors->has('pagibig'))
			<span class="help-inline">{{ $errors->first('pagibig') }}</span>
		@endif
		<span class="input-group-addon">.00</span>
	  </div>
      </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop