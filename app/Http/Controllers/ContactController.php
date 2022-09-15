<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $allMessages = Contact::orderBy('id', 'desc')->paginate(4);

        return view('contacts.index', compact('allMessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $model
     */
    public function store(Request $request, Contact $model)
    {
        $model = $model->create($request->all());

        $adminUsers = User::whereHas('roles', function ($q) {
            return $q->where('name', '=', 'admin');
        })->get();

        Notification::send($adminUsers, new NewContactNotification($model));

        return back()->with('success', 'Thank you, Your Message was SUCCESSFULLY Sent');
    }

}
