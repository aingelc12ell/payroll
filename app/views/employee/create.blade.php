@extends('layouts.page')

@section('content')
	@if($errors->has())
		<div class="alert alert-warning" role="alert">Please check the form for errors</div>
	@endif
	
	{{ Form::open(array('route' => 'employees.store')) }}
	  <div class="form-group 
	  					@if($errors->has('txtFirstName'))
		  					warning
						@endif
		  	">
	    <label for="txtFirstName">First Name</label>
	    <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="Enter First Name">
		@if($errors->has('txtFirstName'))
			<span class="help-inline">{{ $errors->first('txtFirstName') }}</span>
		@endif
	  </div>
	  <div class="form-group">
	    <label for="txtMiddleName">Middle Name</label>
	    <input type="text" class="form-control" id="txtMiddleName" name="txtMiddleName" placeholder="Enter Middle Name">
	  </div>
	  <div class="form-group">
	    <label for="txtLastName">Last Name</label>
	    <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Enter Last Name">
	  </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop