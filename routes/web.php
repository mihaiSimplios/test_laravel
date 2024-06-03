<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-contacte', 'App\Http\Controllers\TestController@testContacte');

Route::get('/test-car', 'App\Http\Controllers\TestController@testCar');

Route::get('/test-client-observer', 'App\Http\Controllers\TestController@testClientObserver');

Route::get('/simulate-server-error', function () {
    abort(500, 'This is a simulated server error.');
});

Route::get('/load-drivers', 'App\Http\Controllers\DriverController@index');

Route::get('/load-cars', function (Car $car) {
    return $car->all();
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);

    // Soft delete
    Route::delete('/{id}', [UserController::class, 'destroy']);

    // Restore
    Route::get('/restore-user/{id}', [UserController::class, 'restoreUser']);

    // Force delete
    Route::delete('/force-delete-user/{id}', [UserController::class, 'forceDeleteUser']);
});

