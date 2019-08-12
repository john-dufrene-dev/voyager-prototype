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

// VOYAGER ROUTES
Route::group(['prefix' => 'admin'], function () {

    $moduleNamespace = 'Modules\LogViewer\Http\Controllers';

    // Logs Routes
    Route::group([
        'as'     => 'admin.logs.',
        'prefix' => 'logs',
    ], function () use ($moduleNamespace) {
        Route::get('/', ['uses' => 'Admin\VoyagerLogsExtendController@index',  'as' => 'index']);
        Route::post('/', ['uses' => 'Admin\VoyagerLogsExtendController@index',  'as' => 'post']);
    });

});