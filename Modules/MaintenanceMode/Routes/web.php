<?php

use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAfter;

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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['as' => 'voyager.'], function () {
        event(new Routing());
    
        Route::post('maintenance/ajax', [
            'uses' => 'VoyagerMaintenanceModeController@AjaxTurnMaintenanceMode', 
            'as' => 'turn']
        );
    
        event(new RoutingAfter());
    });
});
