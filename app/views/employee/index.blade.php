@extends('layouts.page')

@section('content')
   <div class="page-header">
           <h1>Employees</h1>
         </div>
         <div class="row">
           <div class="col-md-12">
             <table class="table">
               <thead>
                 <tr>
                   <th>#</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Designation</th>
                 </tr>
               </thead>
               <tbody>
				 @foreach($employees as $employee)
                 <tr>
                   <td>{{ $employee->firstname }}</td>
                   <td>{{ $employee->middlename }}</td>
                   <td>{{ $employee->lastname }}</td>
                   <td> - </td>
                 </tr>
				 @endforeach
               </tbody>
             </table>
           </div>
    	</div>
@stop