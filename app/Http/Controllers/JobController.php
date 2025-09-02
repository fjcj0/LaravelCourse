<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', ['jobs' => Job::with('employer')->latest()->paginate(5)]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        if (!$job) abort(404);
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required'],
        ]);
        $newJob = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
        Mail::to($newJob->employer->user->email)->queue(
            new JobPosted($newJob)
        );
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        if (!$job) abort(404);
        //Gate::authorize('edit-job', $job);
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required'],
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        $job->save();
        return redirect('/job/' . $job->id);
    }
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
    public function contact()
    {
        return view('contact');
    }
    public function home()
    {
        return view('home');
    }
}
