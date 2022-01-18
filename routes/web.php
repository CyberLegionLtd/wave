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


// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Include Wave Routes
Wave::routes();

Route::domain('{subdomain}.cyberlegion.io')->group(function() {
	Route::get('user/{id}', function($subdomain, $id) {
		dd('Subdomain Catch');
	});
});