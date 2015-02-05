@extends('admin.layouts.master')

@section('browser_title')
 Edit Page
@stop

@section('head')
<!-- bootstrap wysihtml5 - text editor -->
<link href="{{ URL::to('/')}}adminlte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
@stop

@section('content_header')
 <section class="content-header">
    <h1>
        Pages
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Pages</li>
        <li class="active">Edit</li>
    </ol>
</section>
@stop

@section('content')
<div class="row">
    <div class="box box-primary">    
    <!-- form start -->
    {{ Form::open(array('role'=> 'form', 'action'=>'admin.page.update', 'method' => 'put')) }}    
        <div class="box-body">
            <div class="form-group @if ($errors->has('txtTitle')) has-error @endif"> 
                @if ($errors->has('txtTitle'))
                <label class="control-label" for="txtTitle"><i class="fa fa-times-circle-o"></i>{{ $errors->first('txtTitle') }}</label>             
                @endif
                <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="{{ $title }}" placeholder="Enter Title">
            </div>
             <div class="form-group">                
                <textarea id="editor1" name="txtContents" rows="25" cols="80">{{ $body }}</textarea>
            </div>
            <div class="form-group">
                <label>Tags</label>                                                
                <input type="text" class="form-control" id="txtTags" name="txtTags" value="{{ implode(" ,",$tags) }}" placeholder="add tags seperated by comma">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="txtCategory">
                    @foreach($categories as $category)
                        <option>{{ $category}}</option>                    
                    @endforeach
                </select>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <input type="hidden" name="id" value="{{ $_id }}"/>
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>      
    {{ Form::close() }}
    </div><!-- /.box -->
</div>
@stop

@section('footer') 	 
 	 <!-- AdminLTE App -->
	<script src="{{ URL::to('/') }}/adminlte/js/AdminLTE/app.js" type="text/javascript"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ URL::to('/') }}/adminlte/js/AdminLTE/demo.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
    </script>
@stop