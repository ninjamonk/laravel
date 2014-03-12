<?php
Auth::loginUsingId(1, 1);
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

Route::group(['namespace' => 'Tangfastics\Controllers'], function()
{
	Route::get('/', ['as' => 'users.index', 'uses' => 'UserController@getIndex']);

	//Users
	Route::get('profile/{username}', ['as' => 'profile.show', 'uses' => 'ProfileController@getProfile']);

	Route::post('search', ['as' => 'search.do', 'uses' => 'SearchController@postSearch']);
});