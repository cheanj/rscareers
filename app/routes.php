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
	return View::make('home');
});



Route::get('jobs', function()
{
  return View::make('jobs');
});

Route::get('faq', function()
{
    return View::make('faq');
});


Route::get('register/login', 'RegisterController@login');
Route::get('user/login', 'UserController@login');


Route::get('register', array(
  'uses' => 'RegisterController@index',
  'as' => 'register.index'
));
Route::post('register', array(
  'uses' => 'RegisterController@store',
  'as' => 'register.store'
));


Route::get('user', array(
  'uses' => 'UserController@index',
  'as' => 'user.index'
));
Route::post('user', array(
  'uses' => 'UserController@store',
  'as' => 'user.store'
));



Route::post('signin', array('uses' => 'UserController@signin'));


Route::get('user', 'UserController@login');

Route::get('user/register', array(
  'uses' => 'UserController@register',
  'as' => 'user.register'
));

Route::get('logout', array('uses' => 'UserController@logout'));
Route::get('user/profile', array('uses' => 'UserController@profile'));

Route::get('user/myaccount', array('uses' => 'UserController@myaccount'));

Route::get('user/forgot', array('uses' => 'UserController@forgotPassword'));

Route::get('jobs', array(
  'uses' => 'JobController@jobs'));


/**********ADMIN ROUTES*************/

Route::get('admin_dashboard', 'AdminController@index');