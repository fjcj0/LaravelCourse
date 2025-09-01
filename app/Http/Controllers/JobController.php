<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {

        if (!$job) abort(404);
        if (Auth::guest()) {
            return redirect('/login');
        }
        if ($job->employer->user->isNot(Auth::user())) {
            abort(404);
        }
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
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