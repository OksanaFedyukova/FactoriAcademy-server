<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ExercicesController;


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});



Route::apiResource('courses', \App\Http\Controllers\CoursesController::class);

Route::apiResource('users', \App\Http\Controllers\UsersController::class);

Route::apiResource('exercices', ExercicesController::class);