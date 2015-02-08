@extends('layouts.page')

@section('content')
	@if($errors->has())
		<div class="alert alert-warning" role="alert">Please check the form for errors</div>
	@endif
	
	{{ Form::open(array('route' => 'salary.store')) }}
	 
	  <div class="form-group 
	  					@if($errors->has('employee_number'))
		  					has-warning
						@endif
		  	">
	    <label for="employee_number">Employee Number</label>
		{{ Form::text('employee_number', null, array('class'=>'form-control', 'placeholder' => 'Enter Employee Number')) }}
		@if($errors->has('employee_number'))
			<span class="help-inline">{{ $errors->first('employee_number') }}</span>
		@endif
	  </div>
	  
	  
	  <div class="form-group 
	  					@if($errors->has('firstname'))
		  					has-warning
						@endif
		  	">
	    <label for="txtFirstName">First Name</label>
		{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder' => 'Enter First Name')) }}
		@if($errors->has('firstname'))
			<span class="help-inline">{{ $errors->first('firstname') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('middlename'))
		  						has-warning
							 @endif">
							 
	    <label for="txtMiddleName">Middle Name</label>	    
		{{ Form::text('middlename', null, array('class'=>'form-control', 'placeholder' => 'Enter Middle Name')) }}
		
		@if($errors->has('middlename'))
			<span class="help-inline">{{ $errors->first('middlename') }}</span>
		@endif
	  </div>
	  <div class="form-group @if($errors->has('lastname'))
		  						has-warning
							@endif">
	    <label for="txtLastName">Last Name</label>
		
		{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder' => 'Enter Last Name')) }}
		
		@if($errors->has('lastname'))
			<span class="help-inline">{{ $errors->first('lastname') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group">
	  	<label for="gender">Gender</label>&nbsp;&nbsp;&nbsp;
		{{ Form::radio('gender', 'male') }} Male
		{{ Form::radio('gender', 'female') }} Female
	  </div>
	  
	  <div class="form-group @if($errors->has('birthdate'))
		  						has-warning
							@endif">
	    <label for="birthdate">Birth Date</label>
		
		{{ Form::text('birthdate', null, array('class'=>'form-control', 'placeholder' => 'Enter Birth Date')) }}
		
		@if($errors->has('birthdate'))
			<span class="help-inline">{{ $errors->first('birthdate') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('civilstatus'))
		  						has-warning
							@endif">
	    <label for="civilstatus">Civil Status</label>
		{{ Form::select('civilstatus', array('single' => 'Single', 'Married' => 'Married', 'widow' => 'Widow'),
			null, array('class'=> 'form-control')) }}
		
		@if($errors->has('civilstatus'))
			<span class="help-inline">{{ $errors->first('civilstatus') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('phone'))
		  						has-warning
							@endif">
	    <label for="birthdate">Phone</label>
		
		{{ Form::text('phone', null, array('class'=>'form-control', 'placeholder' => 'Enter Phone')) }}
		
		@if($errors->has('phone'))
			<span class="help-inline">{{ $errors->first('phone') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('Address'))
		  						has-warning
							@endif">
	    <label for="address">Address</label>
		
		{{ Form::text('address', null, array('class'=>'form-control', 'placeholder' => 'Enter Address')) }}
		
		@if($errors->has('address'))
			<span class="help-inline">{{ $errors->first('address') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('zip'))
		  						has-warning
							@endif">
	    <label for="birthdate">Zip</label>
		
		{{ Form::text('zip', null, array('class'=>'form-control', 'placeholder' => 'Enter Zip')) }}
		
		@if($errors->has('zip'))
			<span class="help-inline">{{ $errors->first('zip') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('email'))
		  						has-warning
							@endif">
	    <label for="birthdate">email</label>
		
		{{ Form::text('email', null, array('class'=>'form-control', 'placeholder' => 'Enter Email')) }}
		
		@if($errors->has('email'))
			<span class="help-inline">{{ $errors->first('email') }}</span>
		@endif
	  </div>
	  
	  <div class="form-group @if($errors->has('phone'))
		  						has-warning
							@endif">
	    <label for="birthdate">Phone</label>
		
		{{ Form::text('phone', null, array('class'=>'form-control', 'placeholder' => 'Enter Phone')) }}
		
		@if($errors->has('phone'))
			<span class="help-inline">{{ $errors->first('phone') }}</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop