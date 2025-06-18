<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController; // <-- Thêm dòng này
use App\Http\Middleware\AuthTokenMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

