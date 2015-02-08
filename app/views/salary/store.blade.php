@extends('layouts.page')

@section('content')
   <div class="alert alert-success" role="alert">
	   Employee Successfully Added!<br/>
	  {{ link_to('employees/create', 'Add Another') }}
   </div>
@stop