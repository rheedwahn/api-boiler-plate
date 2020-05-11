<?php

Route::group(['middleware' => 'apiLogger'], function() {
    Route::post('/login', 'Api\Auth\LoginController@login');
    Route::post('/register', 'Api\Auth\RegisterController@register');
    Route::get('/users/{token}/verify', 'Api\Auth\RegisterController@verify')->name('email.verify');

    Route::get('/me', 'Api\Me\MeController@me');
    Route::group(['prefix' => 'users'], function() {
        Route::patch('/', 'Api\Me\MeController@update');
        Route::patch('/{user}', 'Api\Me\MeController@updateUserByAdmin');
        Route::delete('/{user}', 'Api\Me\MeController@deleteUser');
        Route::get('/', 'Api\Me\MeController@lists');
    });
});



