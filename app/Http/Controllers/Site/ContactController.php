<?php

namespace App\Http\Controllers\Site;

use App\Events\SendMailProcessed;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

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
        event(new SendMailProcessed($model));

        return back()->with('success', 'Thank you, Your Message was SUCCESSFULLY Sent');
    }
}
