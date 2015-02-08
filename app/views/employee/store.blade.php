@extends('layouts.page')

@section('content')
   <div class="alert alert-success" role="alert">
	   Employee Basic Information Successfully Added!<br/>
	  {{ link_to('employees/create', 'Add Another') }} OR
	  {{link_to('salary/create?id='. $id) }}
   </div>
@stop