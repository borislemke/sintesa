<?php

Route::group(['prefix' => 'api'], function () {

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Authorization, Content-Type');

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

            Route::group(['prefix' => 'navigation'], function () {
                Route::get('index', 'NavigationController@index');
                Route::post('index', 'NavigationController@indexRange');
                Route::get('get/{id}', 'NavigationController@get');
                Route::post('update', 'NavigationController@update');
            });

            Route::group(['prefix' => 'footers'], function () {
                Route::get('index', 'FootersController@index');
                Route::post('index', 'FootersController@indexRange');
                Route::get('get/{id}', 'FootersController@get');
                Route::post('update', 'FootersController@update');
            });

            Route::group(['prefix' => 'hotels'], function () {
                Route::get('index', 'HotelsController@index');
                Route::post('index', 'HotelsController@index');
            });

            Route::group(['prefix' => 'rooms'], function () {
                Route::post('index', 'RoomsController@indexRange');
                Route::get('get/{id}', 'RoomsController@get');
                Route::post('create', 'RoomsController@create');
                Route::post('update', 'RoomsController@update');
            });

            Route::group(['prefix' => 'hotels'], function () {
                Route::post('index', 'HotelsController@indexRange');
                Route::get('get/{id}', 'HotelsController@get');
                Route::post('create', 'HotelsController@create');
                Route::post('update', 'HotelsController@update');
            });

            Route::group(['prefix' => 'media'], function () {
                Route::post('index', 'MediaController@indexFolder');
                Route::post('save', 'MediaController@save');
                Route::post('upload-file', 'MediaController@upload');
                Route::post('update-file', 'MediaController@updateFile');
                Route::post('delete-file', 'MediaController@deleteFile');
                Route::post('mkdir', 'MediaController@mkdir');
                Route::post('delete-folder', 'MediaController@rmdir');
                Route::post('rename-folder', 'MediaController@renameDir');
            });
        });

        Route::group(['prefix' => 'v2'], function() {

        });
    });
});
