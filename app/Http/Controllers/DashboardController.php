<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
       
        // $userNotifications = Auth::user()->unreadNotifications;
        // $unReadMessagesCount = Auth::user()->unreadNotifications()->count();
        // $allMssagesCount = Auth::user()->Notifications()->count();

        
        return view('/');
    }
}
