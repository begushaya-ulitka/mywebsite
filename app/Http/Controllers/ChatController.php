<?php

namespace App\Http\Controllers;

use App\Constants\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\Message;

class ChatController extends Controller
{
    public function showChat(Request $request) {
        $userId = Auth::id();
        $chat = Chat::where('user_id', $userId)->first();
        if (!$chat) {
            return view('errors.404');
        }
        $messages = Message::where('chat_id', $chat->id)->get();

        return view('chat', ['messages' => $messages, 'role' => Roles::$USER_ROLE]);
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

    public function sendAnswer(Request $request) {
        $userId = Auth::id();
        $chat = Chat::where('user_id', $request->id)->first();
        $message = new Message([
            "chat_id" => $chat->id,
            "user_id" => $userId,
            "text" => $request->text,
        ]);
        $message->save();
        $messages = Message::where('chat_id', $chat->id)->get();
        return redirect()->route('chat.answer.form', $request->id)->with(['messages' => $messages]);
    }

    public function showChatForAnswer(Request $request) {
        if (!$request->id) {
            return view('errors.404');
        }
        $chat = Chat::where('user_id', $request->id)->first();
        if (!$chat) {
            return view('errors.404');
        }
        $messages = Message::where('chat_id', $chat->id)->get();
        return view(
            'chat',
            ['messages' => $messages, 'role' => Roles::$OPERATOR_ROLE, 'userId' => $request->id]
        );
    }
}
