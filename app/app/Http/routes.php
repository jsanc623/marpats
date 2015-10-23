<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

# Patterns
Route::pattern('id', '[0-9]+');

# Homepage
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

# Admin areas
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', ['as' => 'admin-home', 'uses' => 'AdminController@index']);
});

/**
 * Authentication routes
 */
Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
