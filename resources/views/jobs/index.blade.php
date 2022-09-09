@extends('layouts/dashboard')

@section('content')
    <div class="row py-2">
        <div class="col"><h1 class="text-center float-right">Jobs</h1></div>
        <div class="col"><a href="{{ route('jobs.create') }}" class="btn btn-primary float-right mt-2">Add new job</a></div>
    </div>
    <div class="col-6 mx-auto">
        @if($flashMessage)
            <div class="alert alert-success" role="alert">{{$flashMessage}} </div>
        @endif
    </div>
    <table class="table table-striped text-center" >
        <thead class="table-dark ">
        <tr>
            <th >Title</th>
            <th >Description</th>
            <th >City</th>
            <th >JobType</th>
            <th >Salary</th>
            <th >Degree</th>
            <th >Exp.(years)</th>
            <th >Deadline</th>
            <th ></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($allJobs as $job)
        <tr>
            <td >{{ $job->name }}</td>
            <td>{{ Str::words($job->description, 1,'...') }}</td>
            <td>{{ $job->city }}</td>
            <td >{{ $job->job_type }}</td>
            <td>{{ $job->salary }}</td>
            <td>{{ $job->degree }}</td>
            <td>{{ $job->experience }}</td>
            <td>{{ $job->deadline }}</td>
            <td class="col col-3">
                <a href="{{route('jobs.show',$job->id)}}" class="btn btn-success">Show</a>
                <a href="" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger"
                        type="submit"
                        style="border: none;
                        outline:none;">Delete
                </button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $allJobs->links() }}
@endsection
