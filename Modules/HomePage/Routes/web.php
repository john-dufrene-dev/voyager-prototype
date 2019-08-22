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

Route::get('/', 'HomePageController@index')->name('home.index');

// Home
Breadcrumbs::for('home.index', function ($trail) {
    $trail->push(__('seo.homepage.homepage'), route('home.index'));
});