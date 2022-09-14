<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactNotification extends Notification
{
    use Queueable;

    protected $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //         ->greeting('Hello, ' . $notifiable->name)
        //         ->line('This is a test message')
        //         ->action('Show in dashboard', route('contacts.index'))
        //         ->line('Thank you');

        return (new MailMessage)->view('mails.template', [
            'messageDetails' => $this->contact,
            'recieverDetails' => $notifiable,
        ]);
    }

    public function toDatabase($notifiable)
    {
        $body = sprintf('%s send new message', $this->contact->name);

        return [
            'title' => 'New message',
            'body' => $body,
            'icon' => 'icon-material-outline-group',
            'url' => route('contacts.index'),
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
