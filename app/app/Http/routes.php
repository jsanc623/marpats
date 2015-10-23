<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

# Patterns
Route::pattern('id', '[0-9]+');

# Website routes
Route::get('/', ['as' => 'website-home', 'uses' => 'WebsiteController@index']);
Route::get('/capture', ['as' => 'website-capture', 'uses' => 'WebsiteController@capture']);

# Admins admin
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', ['as' => 'admin-home', 'uses' => 'AdminController@index']);
});

# Users admin
Route::group(['prefix' => 'mailroom'], function (){
    Route::get('/', ['as' => 'mailroom-home', 'uses' => 'UsersController@index']);
});

/**
 * Authentication routes
 */
Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
