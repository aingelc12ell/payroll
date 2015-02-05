@extends('admin.layouts.master')

@section('browser_title')
 View All Pages
@stop

@section('head')
<link href="{{ URL::to('/') }}/adminlte/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop


@section('content_header')
 <section class="content-header">
    <h1>
        Pages
        <small>{{ link_to('admin/page/create', 'Add New') }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pages</li>
    </ol>
</section>
@stop

@section('content')
 <div class="row">
    <div class="col-xs-12">                    
        <div class="box">
            <div class="box-header">               
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>                            
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>                            
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->author['name'] }}</td>
                            <td>@foreach($page->categories as $category) {{$category}} @endforeach</td>
                            <td>@foreach($page->tags as $tag) {{$tag}} @endforeach</td>
                            <td>{{ $page->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><a href="{{ URL::to("admin/page/".$page->id."/edit") }}">Edit</a></button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">View Stats</a></li>                                        
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                    @endforeach                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@stop

@section('footer')
 	 @include('admin.includes.footer_datatables')
 	 <!-- AdminLTE App -->
	<script src="{{ URL::to('/') }}/adminlte/js/AdminLTE/app.js" type="text/javascript"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ URL::to('/') }}/adminlte/js/AdminLTE/demo.js" type="text/javascript"></script>
 	 <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });
    </script>
@stop