<?php

use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\City\CityController;
use App\Http\Controllers\Api\Country\CountryController;
use App\Http\Controllers\Api\Locality\LocalityController;
use App\Http\Controllers\Api\Me\MeController;
use App\Http\Controllers\Api\Permission\PermissionController;
use App\Http\Controllers\Api\Role\RoleController;
use App\Http\Controllers\Api\State\StateController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'apiLogger'], function () {
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/users/{token}/verify', [RegisterController::class, 'verify'])->name('email.verify');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);
    Route::get('users/{user}/auth', [ForgotPasswordController::class, 'temporaryLogin'])->name('user.temporary.link');

    Route::get('/me', [MeController::class, 'me']);

    Route::group(['prefix' => 'users'], function () {
        Route::patch('/', [MeController::class, 'update']);
        Route::patch('/{user}', [MeController::class, 'updateUserByAdmin']);
        Route::delete('/{user}', [MeController::class, 'deleteUser']);
        Route::get('/', [MeController::class, 'lists']);
    });

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'lists']);
        Route::post('/', [RoleController::class, 'store']);
        Route::patch('/{role}', [RoleController::class, 'update']);
        Route::delete('/{role}', [RoleController::class, 'delete']);
        Route::patch('/{role}/permissions', [RoleController::class, 'assignPermissions']);
    });

    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', [PermissionController::class, 'lists']);
        Route::post('/', [PermissionController::class, 'store']);
        Route::patch('/{permission}', [PermissionController::class, 'update']);
        Route::delete('/{permission}', [PermissionController::class, 'delete']);
    });

    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', [CountryController::class, 'lists']);
        Route::post('/', [CountryController::class, 'store']);
        Route::patch('/{country}', [CountryController::class, 'update']);
        Route::delete('/{country}', [CountryController::class, 'delete']);
        Route::group(['prefix' => '{country}/states'], function () {
            Route::get('/', [StateController::class, 'lists']);
            Route::post('/', [StateController::class, 'store']);
            Route::patch('/{state}', [StateController::class, 'update']);
            Route::delete('/{state}', [StateController::class, 'delete']);
            Route::group(['prefix' => '{state}/cities'], function () {
                Route::get('/', [CityController::class, 'lists']);
                Route::post('/', [CityController::class, 'store']);
                Route::patch('/{city}', [CityController::class, 'update']);
                Route::delete('/{city}', [CityController::class, 'delete']);
                Route::group(['prefix' => '{city}/localities'], function () {
                    Route::get('/', [LocalityController::class, 'lists']);
                    Route::post('/', [LocalityController::class, 'store']);
                    Route::patch('/{locality}', [LocalityController::class, 'update']);
                    Route::delete('/{locality}', [LocalityController::class, 'delete']);
                });
            });
        });
    });

    Route::get('/logout', [MeController::class, 'logout']);
});



