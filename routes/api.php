<?php

Route::group(['middleware' => 'apiLogger'], function() {
    Route::group(['namespace' => 'Api\Auth'], function() {
        Route::post('/login', 'LoginController@login');
        Route::post('/register', 'RegisterController@register');
        Route::get('/users/{token}/verify', 'RegisterController@verify')->name('email.verify');
        Route::post('/forgot-password', 'ForgotPasswordController@forgotPassword');
        Route::post('/reset-password', 'ForgotPasswordController@resetPassword');
        Route::get('users/{user}/auth', 'ForgotPasswordController@temporaryLogin')->name('user.temporary.link');
    });

    Route::get('/me', 'Api\Me\MeController@me');
    Route::group(['prefix' => 'users', 'namespace' => 'Api\Me'], function() {
        Route::patch('/', 'MeController@update');
        Route::patch('/{user}', 'MeController@updateUserByAdmin');
        Route::delete('/{user}', 'MeController@deleteUser');
        Route::get('/', 'MeController@lists');
    });

    Route::group(['prefix' => 'roles', 'namespace' => 'Api\Role'], function() {
        Route::get('/', 'RoleController@lists');
        Route::post('/', 'RoleController@store');
        Route::patch('/{role}', 'RoleController@update');
        Route::delete('/{role}', 'RoleController@delete');
        Route::patch('/{role}/permissions', 'RoleController@assignPermissions');
    });

    Route::group(['prefix' => 'permissions', 'namespace' => 'Api\Permission'], function() {
        Route::get('/', 'PermissionController@lists');
        Route::post('/', 'PermissionController@store');
        Route::patch('/{permission}', 'PermissionController@update');
        Route::delete('/{permission}', 'PermissionController@delete');
    });

    Route::get('/logout', 'Api\Me\MeController@logout');
});



