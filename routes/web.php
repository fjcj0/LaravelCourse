<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::controller(JobController::class)->group(function () {
    Route::view('/', 'home');
    Route::view('/contact', 'contact');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs',  'index');
    Route::get('/job/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/job/{job}/edit',  'edit');
    Route::patch('/jobs/{job}/update',  'update');
    Route::delete('/job/{job}',  'destroy');
});

Route::controller(RegisterUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});