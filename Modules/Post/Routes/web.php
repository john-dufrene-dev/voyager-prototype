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

Route::get(__('seo.articles.url'), 'PostController@index')->name('articles.index');
Route::get(__('seo.articles.url') . '/{category}', 'PostController@category')->name('articles.category');
Route::get(__('seo.articles.url') . '/{category}/{post}', 'PostController@show')->name('articles.show');
