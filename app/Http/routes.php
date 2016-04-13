<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);

Route::group(['prefix' => 'api'], function() {

    Route::group(['prefix' => 'v1'], function() {

        Route::group(['prefix' => 'pages'], function() {
            Route::get('index', 'PaperController@index');
            Route::get('get/{id}', 'PaperController@get');
        });
    });
});

Route::get('/', ['as' => 'home', 'uses' => 'PageController@render']);
Route::get('/{anything?}', ['as' => 'page', 'uses' => 'PageController@render'])->where('anything', '(.*)');

Route::auth();
