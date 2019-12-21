<?php

use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;

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
    
        $namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';
    
        Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'login']);
        Route::post('login', ['uses' => $namespacePrefix.'VoyagerAuthController@postLogin', 'as' => 'postlogin']);
    
        Route::group(['middleware' => 'admin.user'], function () use ($namespacePrefix) {
            event(new RoutingAdmin());

            $moduleNamespace = '\\Modules\\VoyagerBaseExtend\\Http\\Controllers\\';
    
            // Main Admin and Logout Route
            Route::get('/', ['uses' => $namespacePrefix.'VoyagerController@index',   'as' => 'dashboard']);
            Route::post('logout', ['uses' => $namespacePrefix.'VoyagerController@logout',  'as' => 'logout']);
            Route::post('upload', ['uses' => $namespacePrefix.'VoyagerController@upload',  'as' => 'upload']);
    
            Route::get('profile', ['uses' => $namespacePrefix.'VoyagerUserController@profile', 'as' => 'profile']);
    
            try {
                foreach (Voyager::model('DataType')::all() as $dataType) {
                    $breadController = $dataType->controller
                                     ? Str::start($dataType->controller, '\\')
                                     : $namespacePrefix.'VoyagerBaseController';
    
                    Route::get($dataType->slug.'/order', $breadController.'@order')->name($dataType->slug.'.order');
                    Route::post($dataType->slug.'/action', $breadController.'@action')->name($dataType->slug.'.action');
                    Route::post($dataType->slug.'/order', $breadController.'@update_order')->name($dataType->slug.'.order');
                    Route::get($dataType->slug.'/{id}/restore', $breadController.'@restore')->name($dataType->slug.'.restore');
                    Route::get($dataType->slug.'/relation', $breadController.'@relation')->name($dataType->slug.'.relation');
                    Route::post($dataType->slug.'/remove', $breadController.'@remove_media')->name($dataType->slug.'.media.remove');
                    Route::resource($dataType->slug, $breadController, ['parameters' => [$dataType->slug => 'id']]);
                }
            } catch (\InvalidArgumentException $e) {
                throw new \InvalidArgumentException("Custom routes hasn't been configured because: ".$e->getMessage(), 1);
            } catch (\Exception $e) {
                // do nothing, might just be because table not yet migrated.
            }
    
            // Role Routes
            Route::resource('roles', $namespacePrefix.'VoyagerRoleController');
    
            // Menu Routes
            Route::group([
                'as'     => 'menus.',
                'prefix' => 'menus/{menu}',
            ], function () use ($namespacePrefix) {
                Route::get('builder', ['uses' => 'Admin\VoyagerMenuExtendController@builder',    'as' => 'builder']);
                Route::post('order', ['uses' => 'Admin\VoyagerMenuExtendController@order_item', 'as' => 'order']);
    
                Route::group([
                    'as'     => 'item.',
                    'prefix' => 'item',
                ], function () use ($namespacePrefix) {
                    Route::delete('{id}', ['uses' => 'Admin\VoyagerMenuExtendController@delete_menu', 'as' => 'destroy']);
                    Route::post('/', ['uses' => 'Admin\VoyagerMenuExtendController@add_item',    'as' => 'add']);
                    Route::put('/', ['uses' => 'Admin\VoyagerMenuExtendController@update_item', 'as' => 'update']);
                });
            });
    
            // Settings
            // Value modified
            Route::group([
                'as'     => 'settings.',
                'prefix' => 'settings',
            ], function () use ($namespacePrefix) {
                Route::get('/', ['uses' => 'Admin\VoyagerSettingsExtendController@index',        'as' => 'index']);
                Route::post('/', ['uses' => 'Admin\VoyagerSettingsExtendController@store',        'as' => 'store']);
                Route::put('/', ['uses' => 'Admin\VoyagerSettingsExtendController@update',       'as' => 'update']);
                Route::delete('{id}', ['uses' => 'Admin\VoyagerSettingsExtendController@delete',       'as' => 'delete']);
                Route::get('{id}/move_up', ['uses' => 'Admin\VoyagerSettingsExtendController@move_up',      'as' => 'move_up']);
                Route::get('{id}/move_down', ['uses' => 'Admin\VoyagerSettingsExtendController@move_down',    'as' => 'move_down']);
                Route::put('{id}/delete_value', ['uses' => 'Admin\VoyagerSettingsExtendController@delete_value', 'as' => 'delete_value']);
            });
    
            // Admin Media
            Route::group([
                'as'     => 'media.',
                'prefix' => 'media',
            ], function () use ($namespacePrefix) {
                Route::get('/', ['uses' => $namespacePrefix.'VoyagerMediaController@index',              'as' => 'index']);
                Route::post('files', ['uses' => $namespacePrefix.'VoyagerMediaController@files',              'as' => 'files']);
                Route::post('new_folder', ['uses' => $namespacePrefix.'VoyagerMediaController@new_folder',         'as' => 'new_folder']);
                Route::post('delete_file_folder', ['uses' => $namespacePrefix.'VoyagerMediaController@delete', 'as' => 'delete']);
                Route::post('move_file', ['uses' => $namespacePrefix.'VoyagerMediaController@move',          'as' => 'move']);
                Route::post('rename_file', ['uses' => $namespacePrefix.'VoyagerMediaController@rename',        'as' => 'rename']);
                Route::post('upload', ['uses' => $namespacePrefix.'VoyagerMediaController@upload',             'as' => 'upload']);
                // Route::post('remove', ['uses' => $namespacePrefix.'VoyagerMediaController@remove',             'as' => 'remove']);
                Route::post('crop', ['uses' => $namespacePrefix.'VoyagerMediaController@crop',             'as' => 'crop']);
            });
    
            // BREAD Routes
            Route::group([
                'as'     => 'bread.',
                'prefix' => 'bread',
            ], function () use ($namespacePrefix) {
                Route::get('/', ['uses' => $namespacePrefix.'VoyagerBreadController@index',              'as' => 'index']);
                Route::get('{table}/create', ['uses' => $namespacePrefix.'VoyagerBreadController@create',     'as' => 'create']);
                Route::post('/', ['uses' => $namespacePrefix.'VoyagerBreadController@store',   'as' => 'store']);
                Route::get('{table}/edit', ['uses' => $namespacePrefix.'VoyagerBreadController@edit', 'as' => 'edit']);
                Route::put('{id}', ['uses' => $namespacePrefix.'VoyagerBreadController@update',  'as' => 'update']);
                Route::delete('{id}', ['uses' => $namespacePrefix.'VoyagerBreadController@destroy',  'as' => 'delete']);
                Route::post('relationship', ['uses' => $namespacePrefix.'VoyagerBreadController@addRelationship',  'as' => 'relationship']);
                Route::get('delete_relationship/{id}', ['uses' => $namespacePrefix.'VoyagerBreadController@deleteRelationship',  'as' => 'delete_relationship']);
            });
    
            // Database Routes
            // ERROR in README.md : waiting for tcg/voyager update
            Route::resource('database', $namespacePrefix.'VoyagerDatabaseController');
            // Route::resource('database', 'Admin\VoyagerDatabaseExtendController');
    
            // Compass Routes
            Route::group([
                'as'     => 'compass.',
                'prefix' => 'compass',
            ], function () use ($moduleNamespace) {
                Route::get('/', ['uses' => 'Admin\VoyagerCompassExtendController@index',  'as' => 'index']);
                Route::post('/', ['uses' => 'Admin\VoyagerCompassExtendController@index',  'as' => 'post']);
            });

            // Ajax Routes
            Route::group([
                'as'     => 'voyagerbaseextend.ajax.statut.',
                'prefix' => 'voyagerbaseextend',
            ], function () use ($moduleNamespace) {

                Route::post('/ajax/statut', [
                    'uses' => 'Admin\VoyagerBaseAjaxExtendController@updateMultiplesStatuts',  
                    'as' => 'post']
                );

                Route::post('/ajax/updateactiveitem', [
                    'uses' => 'Admin\VoyagerMenuExtendController@updateActiveItem', 
                    'as' => 'active.item'
                ]);

            });
    
            event(new RoutingAdminAfter());
        });
    
        //Asset Routes
        Route::get('voyager-assets', ['uses' => $namespacePrefix.'VoyagerController@assets', 'as' => 'voyager_assets']);
    
        event(new RoutingAfter());
    });
});
