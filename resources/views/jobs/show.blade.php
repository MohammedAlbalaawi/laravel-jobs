
@extends('layouts/dashboard')

@section('content')
    <div class="d-flex align-items-center justify-content-center pt-2" >
    <div class="card text-dark bg-light " style="width: 80%;">
        <div class="card-header text-bold text-center text-light bg-dark">Job Details</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    Title<br/><hr/>
                    Description<br/><hr/>
                    City<br/><hr/>
                    Job Type<br/><hr/>
                    Salary<br/><hr/>
                    Degree<br/><hr/>
                    Experience(years)<br/><hr/>
                    Deadline<br/>

                </div>
                <div class="col">
                    {{ $job->name }}<br/><hr/>
                    {{ $job->description }}<br/><hr/>
                    {{ $job->city }}<br/><hr/>
                    {{ $job->job_type }}<br/><hr/>
                    {{ $job->salary }}<br/><hr/>
                    {{ $job->degree }}<br/><hr/>
                    {{ $job->experience }}<br/><hr/>
                    {{ $job->deadline }}<br/>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
