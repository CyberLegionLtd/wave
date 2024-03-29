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

$domain = config('app.domain', 'localhost');

Route::domain("{subdomain}.$domain")->group(function() {
	Route::get('/', function($subdomain) {
        dd('Domain Catch');
	});
});

Route::domain($domain)->group(function() {
    // Authentication routes
    Auth::routes();


    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });

    // Include Wave Routes
    Wave::routes();
});
