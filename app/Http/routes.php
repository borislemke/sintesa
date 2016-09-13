<?php

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

match_locale();

Route::get('doctor', 'SettingsController@doctor');
Route::get('calendar', 'CalendarController@index');
Route::get('analytics/{days}', 'AnalyticsController@query');
Route::get('languages', 'SettingsController@indexLanguages');
Route::get('listUrls', 'PageController@listUrls');

Route::get('modules', 'PaperController@indexModules');

Route::get('/', ['as' => 'home', 'uses' => 'PageController@serve']);
Route::get('/file/{file?}', ['as' => 'pdf', 'uses' => 'FileController@renderPdf'])->where('file', '(.*)');
Route::get('/render-pages', 'PageController@renderAll');
Route::get('/render/{page}', ['as' => 'page', 'uses' => 'PageController@render'])->where('anything', '(.*)');
Route::get('/{anything?}', ['as' => 'page', 'uses' => 'PageController@serve'])->where('anything', '(.*)');

Route::auth();
