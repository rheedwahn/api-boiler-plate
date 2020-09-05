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

    Route::group(['prefix' => 'countries'], function () {
        Route::group(['namespace' => 'Api\Country'], function() {
            Route::get('/', 'CountryController@lists');
            Route::post('/', 'CountryController@store');
            Route::patch('/{country}', 'CountryController@update');
            Route::delete('/{country}', 'CountryController@delete');
        });
        Route::group(['prefix' => '{country}/states'], function() {
            Route::group(['namespace' => 'Api\State'], function() {
                Route::get('/', 'StateController@lists');
                Route::post('/', 'StateController@store');
                Route::patch('/{country}', 'StateController@update');
                Route::delete('/{country}', 'StateController@delete');
            });
            Route::group(['prefix' => '{state}/cities'], function() {
                Route::group(['namespace' => 'Api\City'], function() {
                    Route::get('/', 'CityController@lists');
                    Route::post('/', 'CityController@store');
                    Route::patch('/{country}', 'CityController@update');
                    Route::delete('/{country}', 'CityController@delete');
                });
                Route::group(['prefix' => '{city}/localities'], function() {
                    Route::group(['namespace' => 'Api\Locality'], function() {
                        Route::get('/', 'LocalityController@lists');
                        Route::post('/', 'LocalityController@store');
                        Route::patch('/{country}', 'LocalityController@update');
                        Route::delete('/{country}', 'LocalityController@delete');
                    });
                });
            });
        });
    });

    Route::get('/specialities', 'Api\Speciality\SpecialityController@lists');
    Route::get('/medical-insurances', 'Api\MedicalInsurance\MedicalInsuranceController@lists');
    Route::get('/disease-conditions', 'Api\DiseaseCondition\DiseaseConditionController@lists');
    Route::get('/procedures', 'Api\Procedure\ProcedureController@lists');
    Route::get('/procedures/{procedure}', 'Api\Procedure\ProcedureController@listDetails');

    Route::get('/logout', 'Api\Me\MeController@logout');
});



