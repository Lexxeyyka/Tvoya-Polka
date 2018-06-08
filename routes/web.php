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
/**
 * Роутинг, если пользователь авторизирован
 */
Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('profile/{action?}', 'RenterController@showProfile')
        ->where('action', 'sold|now')->name('user.profile');
    Route::get('profile/logout', 'RenterController@getLogout')->name('user.logout');
    Route::get('profile/money', 'RenterController@showMoneyReceiving')->name('user.money');
});

/**
 * Роутинг, если пользователь не авторизирован
 */
Route::middleware(['guest', 'preventBackHistory'])->group(function () {
    Route::post('login', 'RenterController@postLogin')->name('user.login');
    Route::get('recover', 'RenterController@showRecover')->name('user.recover');
});

/**
 * Роутинг базовых страниц сайта
 */
Route::get('/', 'MainController@showHome')->name('home');
Route::get('about', 'MainController@showAbout')->name('about');
// Генератор паролей
Route::get('pass', function () {
    $password = request()->get('p');

    return Hash::make($password);
});