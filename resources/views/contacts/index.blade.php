@extends('layouts/dashboard')

@section('content')
    <div class="row py-2">
        <div class="col"><h1 class="text-center">Messages</h1></div>
    </div>

    <table class="table table-striped text-center" >
        <thead class="table-dark ">
        <tr>
            <th >Sender</th>
            <th >Email</th>
            <th >Subject</th>
            <th >Message</th>
            <th ></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($allMessages as $message)
        <tr>
            <td >{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td >{{ $message->subject }}</td>
            <td>{{ Str::words($message->message, 1,'...') }}</td>
            <td class="col col-3">
                <a href="" class="btn btn-success">Show</a>
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
    {{ $allMessages->links() }}
@endsection