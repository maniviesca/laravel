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
Route::get('/edad/{age?}' , 'BasicController@edad')->name('edad');

Route::get('/nombre/{name}' , 'BasicController@nombre');;

Route::get('texto', 'RestController@invert');

Route::get('song', 'RestController@text');

/*Route::get('Hello', function(){
	echo 'Hola otra vez';
});*/
