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
	return View::make('hello');
});

Route::get('login', array('uses' => 'LoginController@showLogin'));
Route::post('login', array('uses' => 'LoginController@sendLogin'));
Route::get('logout', array('uses' => 'LoginController@doLogout'));
Route::post('/update-user/{id}','HomeController@updateUser');
Route::get('/cash-in/{id}','HomeController@getCashIn');
Route::get('/cash-out/{id}','HomeController@getCashOut');

Route::controller('home','HomeController');