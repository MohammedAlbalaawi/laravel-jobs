
@extends('layouts/dashboard')

@section('content')

<!-- Show Error Messages -->
<div class="col-6 mx-auto">
    @if ($errors->any())
        <div class="text-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form action="{{route('roles.store')}}" method="post" >
    @csrf
    <div class="col-6 mx-auto">
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Enter Role Name">
        </div>

        <div class="mb-3" style="background-color:#f2f2f2; padding-left: 10px; border-radius: 5px;">
            <label class="form-label">Permissions</label>
            @foreach($permissions as $permission)
                <div>
                    <input type="checkbox" name="permission[]" value="{{$permission->id}}" >
                    <label>{{$permission->name}}</label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <Button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</Button>
        </div>
    </div>
</form>
@endsection
