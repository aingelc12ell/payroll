<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('themes/default/index');
});



/* admin routes */
Route::group(array('prefix' => 'admin'), function()
{
    Route::get('home', 'DashboardController@home');    
    Route::resource('page', 'PageController');
});

Route::get('/admin', function()
{
	return Redirect::to('admin/home');
});


/* installer routes */
if(Config::get('dar.install'))
{
	Route::get('install', 'InstallerController@start');
	Route::post('install_save', 'InstallerController@save');
}


Route::get('{slug}', function($slug) {
    $page = Page::where('slug', '=', $slug)->first();

    if ( is_null($page) )        
        App::abort(404);

    return View::make('themes.default.layouts.page', $page);
});