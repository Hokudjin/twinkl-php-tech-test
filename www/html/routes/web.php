<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\SignUpValidatorMiddleware;

Route::post('/signup', [UserController::class, 'signUp'])->middleware(SignUpValidatorMiddleware::class);

Route::get('/', function () {
    return view('welcome');
});