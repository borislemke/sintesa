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

Route::get('navigation', 'NavigationController@build');
Route::post('webhook', 'WebhookController@handle');
Route::get('files', 'FilesController@index');
Route::get('scrape', 'ScrapeController@index');

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

Route::get('barber', function() {
    return view('static.barber');
});
Route::get('the-wellness-center', function() {
    return view('static.wellness');
});
Route::get('/', ['as' => 'home', 'uses' => 'PageController@render']);
Route::get('/{anything?}', ['as' => 'page', 'uses' => 'PageController@render'])->where('anything', '(.*)');

Route::auth();
