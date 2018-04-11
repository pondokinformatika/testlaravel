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



Route::prefix('santri')->group(function () {
	Route::get('/', 'HomeController@listSantri');
	Route::get('/create', 'HomeController@create');
	Route::post('/create', 'HomeController@insert');
	Route::get('/hapus/{id}', 'HomeController@hapus');
	Route::get('/edit/{id}', 'HomeController@edit');
	
	Route::post('/update', 'HomeController@update');
});

Route::prefix('user')->group(function () {
	Route::get('/', 'Users@index');
	Route::get('/create', 'Users@create');
	Route::post('/create', 'Users@insert');
	Route::get('/hapus/{id}', 'Users@hapus');
	Route::get('/edit/{id}', 'Users@edit');
	
	Route::post('/update', 'Users@update');
});


Route::get('/', function() {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('photos', 'PhotoController');

// Minggu depan belajar :
// - Route resource, route name
// - display error per input
// - blade section, yeild, asset
// - Middleware
// - Trait
// - Session
// - error handling
// - how to use package
