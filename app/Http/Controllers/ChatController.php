<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\Message;

class ChatController extends Controller
{
    public function showChat(Request $request) {
        $userId = Auth::id();
        $chat = Chat::where('user_id', $userId)->first();
        $messages = Message::where('chat_id', $chat->id)->get();
        return view('chat', ['messages' => $messages]);
    }

    public function sendMessage(Request $request) {
        $userId = Auth::id();
        $chat = Chat::where('user_id', $userId)->first();
        $message = new Message([
            "chat_id" => $chat->id,
            "user_id" => $userId,
            "text" => $request->text,
        ]);
        $message->save();
        $messages = Message::where('chat_id', $chat->id)->get();
        return redirect()->route('chat.form')->with(['messages' => $messages]);
    }
}
