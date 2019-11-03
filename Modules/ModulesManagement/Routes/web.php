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

if(Module::find('ModulesManagement')->isEnabled()) {
    Route::group(['prefix' => 'admin'], function () {

        $moduleNamespace = 'Modules\ModulesManagement\Http\Controllers';

        // Modules Routes
        Route::group([
            'as'     => 'modules.',
            'prefix' => 'modules',
            ], function () use ($moduleNamespace) {
                Route::get('/', ['uses' => 'Admin\VoyagerModulesManagementController@index',  'as' => 'index']);
                Route::post('/', ['uses' => 'Admin\VoyagerModulesManagementController@index',  'as' => 'post']);
        });

    });
}
