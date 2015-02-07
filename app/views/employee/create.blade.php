@extends('layouts.page')

@section('content')
	<form>
	  <div class="form-group">
	    <label for="txtFirstName">First Name</label>
	    <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name">
	  </div>
	  <div class="form-group">
	    <label for="txtMiddleName">Middle Name</label>
	    <input type="text" class="form-control" id="txtMiddleName" placeholder="Enter Middle Name">
	  </div>
	  <div class="form-group">
	    <label for="txtLastName">Last Name</label>
	    <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name">
	  </div>
	  <button type="submit" class="btn btn-default">Save</button>
	</form>
@stop