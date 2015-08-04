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

Route::get('/', ['as' => 'front.index', 'uses' => 'FrontController@index']);
Route::get('/contact', ['as' => 'front.contact', 'uses' => 'FrontController@contact']);
Route::get('/reviews', ['as' => 'front.reviews', 'uses' => 'FrontController@reviews']);

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', ['as' => 'admin.index', 'uses' =>'FrontController@admin']);
	Route::resource('movie', 'MovieController');
});

Route::resource('user','UserController');
Route::resource('genre','GenreController');
Route::resource('genres','GenreController@listing');

Route::resource('log','LogController');
Route::get('logout',['as' => 'logout', 'uses' => 'LogController@logout']);