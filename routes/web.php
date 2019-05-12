<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/status', function () {
    return view("layouts.app");
});

Route::get('/', 'HomeController@index')->name('home');


Route::get('/login','Manager\ManagerController@login' )->name('login');
Route::group(['middleware' => 'auth','prefix' => '/manager'], function () {
	Route::get('/', 'Manager\ManagerController@index')->name('home');
	Route::resource('user', 'Manager\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'Manager\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'Manager\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'Manager\ProfileController@password']);
});

