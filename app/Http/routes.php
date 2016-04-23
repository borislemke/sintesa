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

Route::post('webhook', 'WebhookController@handle');
Route::get('files', 'FilesController@index');
Route::get('scrape', 'ScrapeController@index');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type');

if (env('APP_DEBUG')) {
    Route::get('/_debugbar/assets/stylesheets', [
        'as' => 'debugbar-css',
        'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
    ]);
    Route::get('/_debugbar/assets/javascript', [
        'as' => 'debugbar-js',
        'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
    ]);
}

Route::get('import', 'PaperController@import');

Route::group(['prefix' => 'api'], function () {

    Route::post('authenticate', 'AuthenticateController@authenticate');

    Route::post('reauthenticate', 'AuthenticateController@reauthenticate');

    Route::post('logout', 'AuthenticateController@logout');

    Route::group(['middleware' => ['jwt.auth']], function () {

        Route::group(['prefix' => 'v1'], function () {

            Route::group(['prefix' => 'pages'], function () {

                Route::get('get/{id}', 'PaperController@get');

                Route::get('index', 'PaperController@index');

                Route::post('index', 'PaperController@indexRange');

                Route::post('create', 'PaperController@create');

                Route::post('update', 'PaperController@update');

                Route::post('destroy', 'PaperController@destroy');
            });

            Route::group(['prefix' => 'files'], function () {

                Route::get('index', 'FilesController@index');
            });
        });
    });
});

Route::get('barber', function() {
    return view('static.barber');
});
Route::get('the-wellness-center', function() {
    return view('static.wellness');
});
Route::get('/', ['as' => 'home', 'uses' => 'PageController@render']);
Route::get('/{anything?}', ['as' => 'page', 'uses' => 'PageController@render'])->where('anything', '(.*)');

Route::auth();
