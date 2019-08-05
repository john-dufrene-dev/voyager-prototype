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
if(Module::find('PassportAuthentification')->enabled())
    Route::get('admin/passport', 'VoyagerPassportAuthentificationController@index')->name('modules.passport.index');