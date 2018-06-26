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

//Route::get('/', 'WelcomeController@index');
Route::get('/accounts', 'AccountController@index');
Route::get('home', 'HomeController@index');
Route::get('/about', 'WelcomeController@test');
Route::get('/', 'PostController@index');
Route::get('/manage_posts', 'PostController@manage_posts');

Route::get('/create_blogs', 'AuthorController@index');

/**Route::controllers([
	'auth' => 'Auth\AuthController',11111
	'password' => 'Auth\PasswordController',
]);**/
