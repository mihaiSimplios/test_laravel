<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

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
