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
/*
Route::resource('api/expedition','ExpeditionController');
Route::get('expeditionapp','ExpedAppController@index');
*/
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::post('friend', 'FriendController@store');
Route::controller('friend', 'FriendController');

Route::post('expedition', 'ExpeditionController@store');

Route::resource('story', 'StoryController');
//Route::resource('story.part', 'PartController');
Route::resource('story.chapter','ChapterController');

Route::resource('profile', 'ProfileController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
