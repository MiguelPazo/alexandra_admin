<?php

Route::get('/', function () {
    return Redirect::to('auth/login');
//    return View::make('auth.login');
//    return View::make('layout');
});

Route::group([
    'namespace' => 'Auth'
], function () {
    Route::controllers([
        'auth' => 'AuthController',
        'pass' => 'PasswordController'
    ]);
});

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('home', 'HomeController@index');

    /**
     * Section for PROCESS urls
     */
    Route::resource('process', 'ProcessController');
    Route::get('process-list', [
        'as' => 'process.list',
        'uses' => 'ProcessController@showView'
    ]);
    Route::get('process/{id}/elections/', [
        'as' => 'process.elections',
        'uses' => 'ProcessController@elections'
    ]);
    Route::get('process/config/{id}', [
        'as' => 'process.config',
        'uses' => 'ProcessController@config'
    ]);

    /**
     * Section for ELECTIONS urls
     */
    Route::resource('election', 'ElectionController');
});

Route::get('view/{name}', function ($name) {
    if (View::exists($name)) {
        return View::make($name);
    }

    App::abort(404);
});