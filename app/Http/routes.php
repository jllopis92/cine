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
Route::get('contacto', 'FrontController@upload');
Route::get('reviews', 'FrontController@cine_tv');
Route::get('reviews', 'FrontController@control_panel');

//Route::resource('movie','MovieController');


