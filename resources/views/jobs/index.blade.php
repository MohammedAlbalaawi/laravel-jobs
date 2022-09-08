@extends('layouts/dashboard')

@section('content')
    <h1 class="text-center py-2">Jobs</h1>
    <table class="table table-striped table-hover text-center">
        <thead class="table-dark ">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">City</th>
            <th scope="col">Job Type</th>
            <th scope="col">Salary</th>
            <th scope="col">Degree</th>
            <th scope="col">Experience(years)</th>
            <th scope="col">Deadline</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        <tr style="height: auto;vertical-align: middle;">
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>7</td>
            <td>
                <a href="" class="btn btn-success">Show</a>
                <a href="" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger"
                        type="submit"
                        style="border: none;
                        outline:none;">Delete
                </button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
