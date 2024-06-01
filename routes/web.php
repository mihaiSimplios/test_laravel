<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-contacte', 'App\Http\Controllers\TestController@testContacte');
