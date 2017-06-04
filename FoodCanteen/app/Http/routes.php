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

Route::get('/', [
    'uses' => 'FoodItemController@getIndex',
	'as' => 'fooditem.index'
]);
Route::get('/add-to-cart/{id}', [
    'uses' => 'FoodItemController@getAddToCart',
	'as' => 'fooditem.addToCart'
]);
Route::get('/food-cart', [
    'uses' => 'FoodItemController@getCart',
	'as' => 'fooditem.foodCart'
]);
Route::get('/checkout', [
    'uses' => 'FoodItemController@getCheckout',
	'as' => 'checkout',
	 'middleware' => 'auth'
]);
Route::post('/checkout', [
    'uses' => 'FoodItemController@postCheckout',
	'as' => 'checkout',
	'middleware' => 'auth'
]);
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
	'as' => 'user.signup',
	'middleware' => 'guest'
]);
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
	'as' => 'user.signup',
	'middleware' => 'guest'
]);
Route::get('/signin', [
    'uses' => 'UserController@getSignin',
	'as' => 'user.signin',
	'middleware' => 'guest'
]);
Route::post('/signin', [
    'uses' => 'UserController@postSignin',
	'as' => 'user.signin',
	'middleware' => 'guest'
]);
Route::get('/user/profile', [
    'uses' => 'UserController@getProfile',
	'as' => 'user.profile',
	'middleware' => 'auth'
	]);
Route::get('/user/logout', [
    'uses' => 'UserController@getlogout',
	'as' => 'user.logout',
	'middleware' => 'auth'
	]);
