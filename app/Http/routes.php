<?php

Route::get('/', function () {
    return View::make('auth.login');
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
    Route::get('process/{id}/elections/',
        [
            'as' => 'process.elections',
            'uses' => 'ProcessController@elections'
        ]);

    /**
     * Section for ELECTIONS urls
     */
    Route::resource('election', 'ElectionController');
});