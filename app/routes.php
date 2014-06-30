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
// Route::controller('users' , 'UsersController');
Route::get('users/{id}/edit/', ['as'=>'user.edit', 'uses'=>'UsersController@edit']);
Route::get('users/dashboard', ['as'=>'users.dashboard','uses'=>'UsersController@getDashboard']);
Route::get('/', 'HomeController');

