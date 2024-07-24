<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index_messages(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        return response()->json(['messages' => $messages]);
    }
}
