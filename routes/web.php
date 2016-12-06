<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('edad');
});

Route::match(['get', 'post'], '/edad/{age?}' ,'BasicController@edad');
//Route::get('/edad/{age?}' , 'BasicController@edad')->name('edad');

Route::match(['get', 'post'], '/nombre/{name}' ,'BasicController@nombre');
//Route::get('/nombre/{name}' , 'BasicController@nombre');;

//Route::match(['get', 'post'], '/texto' ,'RestController@invert');
Route::post('texto', 'RestController@invert');
//Route::match(['get', 'post'], '/song' ,'RestController@text');
Route::post('song', 'RestController@text');

//Route::get('/age/{age}' ,'BasicController@age')->middleware(edad::class);

/*Route::get('/error' ,function()
	{ return "error";});*/
Route::get('/vista' ,'BasicController@vista');
/*{
	return view('layout.vista',['fecha' => '30 noviembre 2016'] );
	
});*/
Auth::routes('login','LoginController');

Route::get('/home', 'HomeController@index');
Route::get('/facebook', 'AuthController@redirectToProvider');
//Route::get('/facebook/callback', 'AuthController@handleProviderCallback');
/*Route::get('/facebook', function()
	{return view('facebook');});
