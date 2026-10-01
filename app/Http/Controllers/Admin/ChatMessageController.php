<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = ChatMessage::orderByDesc('created_at')->paginate(25);

        return view('admin.chat-messages.index', compact('messages'));
    }

    public function create()
    {
        return redirect()->route('admin.chat-messages.index');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.chat-messages.index');
    }

    public function show($id)
    {
        $message = ChatMessage::findOrFail($id);

        return view('admin.chat-messages.show', compact('message'));
    }

    public function edit($id)
    {
        return $this->show($id);
    }

    public function update(Request $request, $id)
    {
        $message = ChatMessage::findOrFail($id);

        if ($request->has('status')) {
            $message->status = $request->input('status');
            $message->save();
        }

        return redirect()->route('admin.chat-messages.index')->with('success', 'Статус изменен');
    }

    public function destroy($id)
    {
        $message = ChatMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.chat-messages.index')->with('success', 'Обращение удалено');
    }
}
