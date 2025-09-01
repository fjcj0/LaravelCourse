<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [JobController::class, 'home']);
//Route::get('/contact', [JobController::class, 'contact']);
Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/job/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/job/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{job}/update', [JobController::class, 'update']);
Route::delete('/job/{job}', [JobController::class, 'destroy']);