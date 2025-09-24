<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdolController;
use App\Http\Controllers\Api\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('idol', IdolController::class);
