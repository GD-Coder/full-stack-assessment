<?php

namespace App\Listeners;

use App\Events\MessageSent;
use App\Mail\MessageCreated;
use Illuminate\Support\Facades\Mail;

class SentMessageListener
{
    public $message;

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        $message = $event->getMessage();
        Mail::to($message->email)->send(
            new MessageCreated($message)
        );
    }
}
