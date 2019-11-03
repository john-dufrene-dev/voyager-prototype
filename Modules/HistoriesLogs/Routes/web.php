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

if(Module::find('HistoriesLogs')->isEnabled()) {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['as' => 'voyager.'], function () {
            event(new Routing());
        
            Route::post('history-log/store/turn', [
                'uses' => 'Admin\HistoryLogAdminController@ActiveHistoryLog', 
                'as' => 'historylog.turn']
            );
        
            event(new RoutingAfter());
        });
    });
}