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

Route::group(['middleware' => ['web']], function(){
	Route::get('/', function () {
	    return view('pages.login');
	})->name('logindulu');

	Route::post('login',array(
		'before' => 'csrf', 
		'uses' => 'UserController@login', 
		'as' => 'login'
		));

	Route::get('logout',array(
		'uses' => 'UserController@logout',
		 'as' => 'logout'
		 ));

	Route::get('user', array(
		'uses' => 'UserController@index',
		'middleware' => 'auth'
		));

	
	Route::get('user/create', array(
		'uses'=>'UserController@create',
		'middleware' => 'auth'
		));

	Route::post('user/create', array(
		'before' => 'csrf', 
		'uses' => 'UserController@create',
		'middleware' => 'auth'
		));

	Route::get ('user/update/{id}', array(
		'uses'=>'UserController@update',
		'middleware' => 'auth'
		));

	Route::post('user/update/{id}', array(
		'before' => 'csrf',
		'uses' => 'UserController@update',
		'middleware' => 'auth'
		));

	Route::get('user/delete/{id}', array(
		'uses'=>'UserController@delete',
		'middleware' => 'auth'
		));	

	Route::get('course', array(
		'uses' => 'CourseController@index',
		'middleware' => 'auth'
		));

	Route::get('course/create', array(
		'uses'=>'CourseController@create',
		'middleware' => 'auth'
		));

	Route::post('course/create', array(
		'before' => 'csrf', 
		'uses' => 'CourseController@create',
		'middleware' => 'auth'
		));

	Route::get ('course/update/{id}', array(
		'uses'=>'CourseController@update',
		'middleware' => 'auth'
		));

	Route::post('course/update/{id}', array(
		'before' => 'csrf',
		'uses' => 'CourseController@update',
		));

	Route::get('course/delete/{id}', array(
		'uses'=>'CourseController@delete',
		'middleware' => 'auth'
		));	

	Route::get('materi', array(
		'uses' => 'MateriController@index',
		'middleware' => 'auth'
		));
	Route::post('materi/upload', array(
		'before' => 'csrf',
		'uses' => 'MateriController@upload',
		'middleware' => 'auth'
		));
	Route::get('materi/delete/{id}', array(
		'uses'=>'MateriController@delete',
		'middleware' => 'auth'
		));
	Route::get('soal', array(
		'uses' => 'SoalController@index',
		'middleware' => 'auth'
		));
	Route::get('soal/create', array(
		'uses'=>'soalController@create',
		'middleware' => 'auth'
		));
	Route::get('courseuser', array(
		'uses' => 'CourseUserController@index',
		'middleware' => 'auth'
		));
	Route::get('video', array(
		'uses' => 'VideoController@index',
		'middleware' => 'auth'
		));
	Route::post('video/upload', array(
		'before' => 'csrf',
		'uses' => 'VideoController@upload',
		'middleware' => 'auth'
		));
	Route::get('video/delete/{id}', array(
		'uses'=>'VideoController@delete',
		'middleware' => 'auth'
		));
});
