<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class MessageSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $message;

    /**
     * Create a new event instance.
     *
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel |array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}
