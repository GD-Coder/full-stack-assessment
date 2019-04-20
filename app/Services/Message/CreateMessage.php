<?php

namespace App\Services\Message;

use App\Contracts\ExecuteableInterface;
use App\Models\Message;
use App\Events\MessageSent;

class CreateMessage implements ExecuteableInterface
{
    private $incomingData, $message;

    public function __construct($incomingData)
    {
        $this->incomingData = (object) $incomingData;
    }

    public function execute()
    {
        $this->message = Message::create([
            'name' => $this->incomingData->name,
            'email' => $this->incomingData->email,
            'company' => $this->incomingData->company,
            'phone' => $this->incomingData->phone,
            'subject' => $this->incomingData->subject,
            'content' => $this->incomingData->content,
        ]);
        event(new MessageSent($this->message));
        return $this->message;
    }
}
