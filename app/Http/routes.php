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

Route::get('/', 'HomeController@index');
Route::get('article/{id}', 'HomeController@article');
Route::get('about', 'HomeController@about');
Route::get('home', 'HomeController@index');
//Route::get('admin', 'AdminController@index');
//Route::get('admin/article', 'AdminController@article');

Route::controller('admin', 'AdminController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
