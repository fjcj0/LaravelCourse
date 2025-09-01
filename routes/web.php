<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*Route::controller(JobController::class)->group(function () {
    Route::view('/', 'home');
    Route::view('/contact', 'contact');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs',  'index');
    Route::get('/job/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/job/{job}/edit',  'edit');
    Route::patch('/jobs/{job}/update',  'update');
    Route::delete('/job/{job}',  'destroy');
});*/

Route::view('/',  'home');
Route::view('/contact',  'contact');
Route::resource('jobs', JobController::class);