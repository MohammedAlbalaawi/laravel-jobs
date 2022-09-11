@extends('layouts/dashboard')

@section('content')
    <div class="row py-2">
        <div class="col"><h1 class="text-center float-right">Roles</h1></div>
        <div class="col"><a href="{{ route('roles.create') }}" class="btn btn-primary float-right mt-2">Add new role</a></div>
    </div>
    <div class="col-6 mx-auto">
        @if($flashMessage)
            <div class="alert alert-success" role="alert">{{$flashMessage}} </div>
        @endif
    </div>

    <table class="table  table-hover w-75 mx-auto text-center">
        <thead class="table-dark ">
        <tr>
            <th scope="col">Name</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
            <tr style="height: auto;vertical-align: middle;">
                <td>{{$role->name}}</td>

                <td>
                    <a href="" class="btn btn-success">Show</a>
                    @if(Auth::user())
                    <a href="" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger"
                            type="submit" 
                            style="border: none;outline:none;">
                            Delete
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
