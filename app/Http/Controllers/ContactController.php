<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMessages = Contact::orderBy('id', 'desc')->paginate(4);

        return view('contacts.index', compact('allMessages'));
    }
}
