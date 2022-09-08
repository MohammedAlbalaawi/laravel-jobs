
@extends('layouts/dashboard')

@section('content')
    <form action="{{ route('jobs.store') }}" method="post">
        @csrf
    <div class="d-flex align-items-center justify-content-center pt-2" >
    <div class="card text-dark bg-light col-8">
        <div class="card-header text-bold text-center text-light bg-dark">New Job</div>
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;">Title</span>
                <input type="text" class="form-control text-center" name="name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Description</span>
                <input type="text" class="form-control text-center" name="description">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >City</span>
                <input type="text" class="form-control text-center" name="city">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Job Type</span>
                <select name="job_type" class="form-control">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Contract">Contract</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Salary</span>
                <input type="text" class="form-control text-center" name="salary">
                <span class="input-group-text">$</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Job Type</span>
                <select name="degree" class="form-control">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="No formal education">No formal education</option>
                    <option value="Primary education">Primary education</option>
                    <option value="Secondary education">Secondary education or high school</option>
                    <option value="GED">GED</option>
                    <option value="Vocational qualification">Vocational qualification</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate or higher">Doctorate or higher</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Experience</span>
                <input type="text" class="form-control text-center" name="experience">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width:15%;" >Deadline</span>
                <input type="date" class="form-control text-center" name="deadline">
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary w-100" >Submit</button>
            </div>
        </div>
    </div>
    </div>
    </form>
@endsection
