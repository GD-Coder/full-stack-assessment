<?php
namespace App\Services;

use App\Contracts\ServiceInterface;
use App\Services\Message\CreateMessage;

class MessageService implements ServiceInterface
{
    private $incomingData;

    public function __construct($incomingData)
    {
        $this->incomingData = (object) $incomingData['message'];
    }

    public function createRecord()
    {
        return (new CreateMessage($this->incomingData))->execute();
    }

}
