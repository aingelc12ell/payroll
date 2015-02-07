@extends('layouts.page')

@section('content')
	@if($errors->has())
		<div class="alert alert-warning" role="alert">Please check the form for errors</div>
	@endif
	
	{{ Form::open(array('route' => 'employees.store')) }}
	  <div class="form-group 
	  					@if($errors->has('firstname'))
		  					has-warning
						@endif
		  	">
	    <label for="txtFirstName">First Name</label>
	    <input type="text" class="form-control" id="txtFirstName" name="firstname" placeholder="Enter First Name">
		@if($errors->has('firstname'))
			<span class="help-inline">{{ $errors->first('firstname') }}</span>
		@endif
	  </div>
	  <div class="form-group @if($errors->has('middlename'))
		  						has-warning
							 @endif">
							 
	    <label for="txtMiddleName">Middle Name</label>
	    <input type="text" class="form-control" id="txtMiddleName" name="txtMiddleName" placeholder="Enter Middle Name">
		@if($errors->has('middlename'))
			<span class="help-inline">{{ $errors->first('middlename') }}</span>
		@endif
	  </div>
	  <div class="form-group @if($errors->has('lastname'))
		  						has-warning
							@endif">
	    <label for="txtLastName">Last Name</label>
	    <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Enter Last Name">
		@if($errors->has('lastname'))
			<span class="help-inline">{{ $errors->first('lastname') }}</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop