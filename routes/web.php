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

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('manage')->middleware('role:superadministrator')->group(function(){
	
	Route::get('/', 'UserController@index');
	Route::get('/dashboard', 'UserController@index')->name('manage.index');
	Route::resource('/users','UserController');
});
Route::prefix('post')->middleware('role:superadministrator|administrator|user')->group(function(){
	
	Route::get('/', 'PostController@index')->name('post.index');
	Route::resource('/managepost','PostController');
	
});


