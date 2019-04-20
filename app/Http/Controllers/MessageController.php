<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MessageService;

class MessageController extends Controller
{
    private $message, $result;

    public function __construct()
    {

    }

    public function createMessage(Request $request)
    {
        $validData = $request->validate([
            'message.name' => 'required|min:3|max:64',
            'message.email' => 'required|email',
            'message.company' => 'required|min:3|max:64',
            'message.phone' => 'required|numeric',
            'message.subject' => 'required|min:3|max:64',
            'message.content' => 'required|min:3|max:255',
        ]);
        (new MessageService($validData))->createRecord();
        return response()->json(['result' => 'success', 'message' => 'Thank you for getting in touch! We will get back to you soon!']);
    }

}
