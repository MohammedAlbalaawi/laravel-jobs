@extends('layouts/dashboard')

@section('notifications')

    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">{{ $unReadMessagesCount }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">{{ $allMssagesCount }} Notifications</span>
            <div class="dropdown-divider"></div>
@foreach ($userNotifications as $notification) 

    <a href="{{ route('contacts.index') }}" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> {{ $notification->data['body'] }}
        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
    </a>

@endforeach
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>

@endsection
@section('content')
    <h1>Dashboard Statistics</h1>
@endsection
