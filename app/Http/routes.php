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
	//milik semua role
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
	Route::group(['middleware' => ['auth']], function(){

		Route::get('courseuser', array(
		'uses' => 'CourseUserController@index'
		));
		Route::get('courseuser/detail/{id}', array(
			'uses' => 'CourseUserController@detail'
			));
		Route::get('courseuser/detail/{id}/{sid}/video', array(
			'uses' => 'CourseUserController@video'
			));
		Route::get('courseuser/detail/{id}/{sid}/materi', array(
			'uses' => 'CourseUserController@materi'
			));
		Route::get('courseuser/detail/{id}/{sid}/soal', array(
			'uses' => 'CourseUserController@soal'
			));
		
		Route::get('bundle', array(
			'uses' => 'BundleController@index'
			));

		Route::group(['middleware' => ['role']], function(){
			Route::get('user', array(
				'uses' => 'UserController@index'
				));

			Route::get('user/create', array(
				'uses'=>'UserController@create'
				));

			Route::post('user/create', array(
				'before' => 'csrf', 
				'uses' => 'UserController@create'
				));

			Route::get ('user/update/{id}', array(
				'uses'=>'UserController@update'
				));

			Route::post('user/update/{id}', array(
				'before' => 'csrf',
				'uses' => 'UserController@update'
				));

			Route::get('user/delete/{id}', array(
				'uses'=>'UserController@delete'
				));	

			Route::get('course', array(
				'uses' => 'CourseController@index'
				));

			Route::get('course/create', array(
				'uses'=>'CourseController@create'
				));

			Route::post('course/create', array(
				'before' => 'csrf', 
				'uses' => 'CourseController@create'
				));

			Route::get ('course/update/{id}', array(
				'uses'=>'CourseController@update'
				));

			Route::post('course/update/{id}', array(
				'before' => 'csrf',
				'uses' => 'CourseController@update'
				));

			Route::get('course/delete/{id}', array(
				'uses'=>'CourseController@delete'
				));	

			Route::get('materi', array(
				'uses' => 'MateriController@index'
				));
			Route::post('materi/upload', array(
				'before' => 'csrf',
				'uses' => 'MateriController@upload'
				));
			Route::get('materi/delete/{id}', array(
				'uses'=>'MateriController@delete'
				));
			Route::get('soal', array(
				'uses' => 'SoalController@index'
				));
			Route::get('soal/create', array(
				'uses'=>'soalController@create'
				));
			Route::get('video', array(
				'uses' => 'VideoController@index'
				));
			Route::post('video/upload', array(
				'before' => 'csrf',
				'uses' => 'VideoController@upload'
				));
			Route::get('video/delete/{id}', array(
				'uses'=>'VideoController@delete'
				));
			
			Route::get('section', array(
				'uses' => 'SectionController@index'
				));

			Route::get('section/create', array(
				'uses'=>'SectionController@create'
				));

			Route::post('section/create', array(
				'before' => 'csrf', 
				'uses' => 'SectionController@create'
				));

			Route::get ('section/update/{id}', array(
				'uses'=>'SectionController@update'
				));

			Route::post('section/update/{id}', array(
				'before' => 'csrf',
				'uses' => 'SectionController@update'
				));

			Route::get('section/delete/{id}', array(
				'uses'=>'SectionController@delete'
				));
		});
	});
});
