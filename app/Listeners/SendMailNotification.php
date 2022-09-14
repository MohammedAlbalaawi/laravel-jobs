<?php

namespace App\Listeners;

use App\Events\SendMailProcessed;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContactNotification;
use Illuminate\Support\Facades\Notification;

class SendMailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendMailProcessed  $event
     * @return void
     */
    public function handle(SendMailProcessed $event)
    {
        $adminUsers = User::whereHas('roles', function ($q) {
            return $q->where('name', '=', 'admin');
        })->get();

        $lastContact = Contact::latest()->first();
        Notification::send($adminUsers, new NewContactNotification($lastContact));
    }
}
