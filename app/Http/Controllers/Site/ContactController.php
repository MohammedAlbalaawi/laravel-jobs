<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{ 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Contact $model)
    {
        $model = $model->create($request->all());

        $flashMessage = session('success');

        $adminUsers = User::whereHas('roles' , function ($q) {
            return $q->where('name','=','admin');
        })->get();

 
        Notification::send($adminUsers , new NewContactNotification($model));


        return back()->with('success', 'Thank you, Your Message was SUCCESSFULLY Sent');

    }

   
}
