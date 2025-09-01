<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs', function () {
    return view('jobs.index', ['jobs' => Job::with('employer')->latest()->paginate(5)]);
});

Route::get('/job/{job}', function (Job $job) {
    if (!$job) abort(404);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:4'],
        'salary' => ['required'],
    ]);
    $newJob = Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
});

Route::get('/job/{job}/edit', function (Job $job) {
    if (!$job) abort(404);
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{job}/update', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:4'],
        'salary' => ['required'],
    ]);
    /*
    $job->title = request('title');
    $job->salary = request('salary');
    */
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    $job->save();
    return redirect('/job/' . $job->id);
});

Route::delete('/job/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});