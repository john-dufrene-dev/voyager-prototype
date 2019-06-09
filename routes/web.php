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
    return view('themes.'.config('prototype.theme').'.pages.home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

if (config('prototype.profil')) {
    Auth::routes();
    Route::get('/mon-compte', 'Pages\ProfileController@profile')->name('pages.profile');
}
