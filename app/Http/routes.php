<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>'auth.basic'],function(){
	
	Route::get('/tasks','TaskController@index');
	Route::get('/tasks/{id}','TaskController@show');
	Route::get('/login','UserController@getLogin');
	Route::post('/login','UserController@postLogin');
	Route::get('/logout','UserController@logout');
	Route::get('/register','UserController@getRegister');
	Route::post('/register','UserController@postRegister');
	Route::get('/reminder','UserController@getReminderMailer');
});
