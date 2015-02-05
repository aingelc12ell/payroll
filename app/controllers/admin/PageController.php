<?php

class PageController extends BaseController {

	public function index()
	{
		$pages = Page::all();		
		return View::make('admin.pages', array('pages'=>$pages));
	}

	public function create()
	{
		return View::make('admin.add_page');
	}

	public function store()
	{
		$rules = array('txtTitle' => 'required|min:5');

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('admin/page/create')->withErrors($validator);
	    }	    

	    $p = new Page();

	    $p->title = Input::get('txtTitle');
	    $p->author = array("name"=> "Darwin", "email" => "darwin@biler-solutions.com");
	    $p->categories = array("open source", "building", "systems");
	    $p->tags = array("alright", "fb", "nosql");
	    $p->body = Input::get('txtContents');
	    $p->save();

	 	return View::make('admin.pages', array('pages'=>Page::all()));   
	}

	function edit($id){			     
	    $page = Page::find($id);  	    
	 	return View::make('admin.edit_page', $page); 	 	
	}

	function update(){
		$rules = array('txtTitle' => 'required|min:5');

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails())
	    {
	        return Redirect::to('admin/page/'. Input::get('id'). '/edit' )->withErrors($validator);
	    }	    

	    $p =  Page::find(Input::get('id'));

	    $p->title = Input::get('txtTitle');
	    $p->author = array("name"=> "Darwin", "email" => "darwin@biler-solutions.com");
	    $p->categories = array("open source", "building", "systems");
	    $p->tags = array("alright", "fb", "nosql");
	    $p->body = Input::get('txtContents');
	    $p->save();

	 	return Redirect::to('admin/page/'. Input::get('id'). '/edit' ); 
	}

}
