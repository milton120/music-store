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


	Route::get('/login','UserController@showLogin');
	Route::post('/login','UserController@doLogin');

Route::group(['middleware' => ['web']],function(){

	Route::get('/', function () {
    	
    	return view('home');
	});

	Route::get('/about','AboutController@showAboutPage');
	Route::get('/contact',function(){
		return view('contact');
	});
	Route::resource('member','MemberController');
	Route::resource('store','StoreController');

});

