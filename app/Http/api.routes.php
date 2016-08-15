<?php

Route::group(['prefix' => 'api'], function () {

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Authorization, Content-Type');

    Route::post('authenticate', 'AuthenticateController@authenticate');
    Route::post('reauthenticate', 'AuthenticateController@reauthenticate');
    Route::post('logout', 'AuthenticateController@logout');

    Route::group(['prefix' => 'ajax'], function() {

        Route::post('contact-form', 'AjaxController@submit');
        Route::post('meeting', 'AjaxController@meeting');
    });

    Route::group(['middleware' => ['jwt.auth']], function () {

        Route::group(['prefix' => 'v1'], function () {

            /**
             * Resource map:
             * | Verb       | Path                          | Action    | Route Name    |
             * --------------------------------------------------------------------------
             * | GET        | /{model}                      | index     | model.index   |
             * | GET        | /{model}/create               | create    | model.create  |
             * | POST       | /{model}                      | store     | model.store   |
             * | GET        | /{model}/{model_id}           | show      | model.show    |
             * | GET        | /{model}/{model_id}/edit      | edit      | model.edit    |
             * | PUT/PATCH  | /{model}/{model_id}           | update    | model.update  |
             * | DELETE     | /{model}/{model_id}           | destroy   | model.destroy |
             * --------------------------------------------------------------------------
             * NGINX DOES NOT ACCEPT WEBDAV METHODS BY DEFAULT
             * FORGET ABOUT THEM AS IT IS RATHER TEDIOUS TO SET UP
             */

            Route::get('languages', function() {
                return \App\SystemLanguage::all();
            });

            Route::post('languages/default', 'SettingsController@makeDefaultLanguage');
            Route::post('languages/add', 'SettingsController@addLanguage');
            Route::post('languages/remove', 'SettingsController@removeLanguage');
            Route::get('languages/all', 'SettingsController@indexLanguages');

            // Route::resource('languages', '');

            Route::post('pages/update', 'PaperController@update');
            Route::resource('pages', 'PaperController');

            Route::resource('posts', 'PostsController');

            Route::resource('navigation', 'NavigationController');
            Route::resource('admin-nav', 'AdminNavController');

            Route::resource('footers', 'PostsController');

            Route::resource('rooms', 'PostsController');

            Route::resource('hotels', 'PostsController');

            Route::post('users/delete', 'UsersController@destroy');
            Route::get('users/auth', 'AuthenticateController@getAuthenticatedUser');
            Route::resource('users', 'UsersController');

            Route::resource('footer', 'FooterDataController');

            //Route::resource('media', 'PostsController');

            Route::group(['prefix' => 'dashboard'], function () {
                Route::get('analytics/query/{days}', 'AnalyticsController@query');
                Route::post('analytics/query', 'AnalyticsController@query');
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

            Route::group(['prefix' => 'rooms'], function () {
                Route::post('index', 'RoomsController@indexRange');
                Route::get('get/{id}', 'RoomsController@get');
                Route::post('create', 'RoomsController@create');
                Route::post('update', 'RoomsController@update');
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
