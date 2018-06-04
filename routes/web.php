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

Route::get('/', 'MainController@showHome')->name('home');

/**
 * Роутинг, если пользователь авторизирован
 */
Route::middleware(['auth'])->group(function () {
    Route::get('profile/{action?}', 'RenterController@showProfile')
        ->where('action', 'sold|now')->name('user.profile');
    Route::get('profile/logout', 'RenterController@getLogout')->name('user.logout');
});

/**
 * Роутинг, если пользователь не авторизирован
 */
Route::middleware(['guest'])->group(function() {
    Route::post('login', 'RenterController@postLogin')->name('user.login');
});

Route::get('recover', 'RecoverController@showRecover');
Route::get('about', 'MainController@showAbout');

Route::get('pass', function() {
    $password = request()->get('p');

    return Hash::make($password);
});