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

Route::get('/', 'MainController@showHome');

//Route::middleware(['guest'])->group(function () {
    Route::get('profile/{action?}', 'RenterController@showProfile')
        ->where('action', 'sold|now');
//});

Route::get('recover', 'RecoverController@showRecover');

Route::get('about', 'MainController@showAbout');