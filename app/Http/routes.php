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

Route::get('/', 'FrontController@index');
Route::get('login', 'FrontController@login');
Route::get('upload', 'FrontController@upload');
Route::get('cine_tv', 'FrontController@cine_tv');
Route::get('control_panel', 'FrontController@control_panel');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UserController');
Route::resource('log','LogController');

//Route::resource('movie','MovieController');


