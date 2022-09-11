@extends('layouts/dashboard')

@section('content')
    <div class="row py-2">
        <div class="col"><h1 class="text-center float-right">Users</h1></div>
        <div class="col"><a href="{{ route('users.create') }}" class="btn btn-primary float-right mt-2">Add new user</a></div>
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
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr style="height: auto;vertical-align: middle;">
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $roleName)
                            <span class="badge bg-success mx-auto">{{ $roleName }}</span>
                        @endforeach
                    @endif
                </td>

                <td>
                    <a href="" class="btn btn-success">Show</a>
                    @if(Auth::user())
                    <a href="" class="btn btn-primary">Edit</a>
   <button class="btn btn-danger"
                                type="submit" style="border: none;outline:none;">Delete</button>
@endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection