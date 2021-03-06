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
if(Module::find('MaintenanceMode')->isEnabled()) {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['as' => 'voyager.'], function () {
            event(new Routing());

            Route::group(['middleware' => 'admin.user'], function () {
        
                Route::post('maintenance/store/turn', [
                    'uses' => 'Admin\VoyagerMaintenanceModeController@StoreTurnMaintenanceMode', 
                    'as' => 'maintenance.turn']
                );

                Route::post('/maintenance/ajax/ip', [
                    'uses' => 'Admin\VoyagerMaintenanceModeController@getAjaxIp', 
                    'as' => 'maintenance.ajax.ip']
                );

                Route::post('/maintenance/ajax/status', [
                    'uses' => 'Admin\VoyagerMaintenanceModeController@updateAjaxStatusIP', 
                    'as' => 'maintenance.ajax.status']
                );
        
                event(new RoutingAfter());
            });
            
        });
    });
}
