<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Job::class, 'model');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $allJobs = Job::orderBy('id', 'desc')->paginate(4);
        $flashMessage = session('success');

        return view('jobs.index', compact('allJobs', 'flashMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\JobRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(JobRequest $request)
    {

        /**
         * @var User $user
         */
        $user = Auth::user();
        $id = $user->id;

        $data = $request->all();
        $data['user_id'] = $id;
        Job::create($data);



        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job Added SUCCESSFULLY');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $model
     * @return \Illuminate\View\View
     */
    public function show(Job $model)
    {
        $job = $model;

        return view('jobs.show', compact('job'));
    }
}
