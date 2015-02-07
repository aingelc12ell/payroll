@extends('layouts.page')

@section('content')
	{{ Form::open(array('route' => 'employees.store')) }}
	  <div class="form-group">
	    <label for="txtFirstName">First Name</label>
	    <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="Enter First Name">
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