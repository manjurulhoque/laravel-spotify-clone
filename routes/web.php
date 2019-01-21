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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('albums/{album}', 'HomeController@show')->name('albums.show');

    // user settings
    Route::view('profile/settings', 'settings')->name('profile.settings');
    Route::view('profile/edit', 'profile-update')->name('profile.edit');
});

Route::get('/home', 'HomeController@index')->name('home');
