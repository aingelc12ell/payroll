@extends('layouts.page')

@section('content')
   <div class="alert alert-success" role="alert">
	   Salary Information Successfully Added!<br/>
	  {{ link_to('employmentinfo/create', 'Set Employment Details') }}
   </div>
@stop