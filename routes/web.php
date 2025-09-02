<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::controller(JobController::class)->group(function () {
    Route::view('/', 'home');
    Route::view('/contact', 'contact');
    Route::get('/jobs', 'index');
    Route::get('/job/{job}', 'show');
});

Route::controller(JobController::class)
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/jobs/create', 'create');
        Route::post('/jobs', 'store');
        Route::get('/job/{job}/edit', 'edit')->middleware('can:edit,job');
        Route::patch('/jobs/{job}/update', 'update')->middleware('can:edit,job');
        Route::delete('/job/{job}', 'destroy')->middleware('can:edit,job');
    });

Route::controller(RegisterUserController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});

Route::get('/test-email', function () {});
