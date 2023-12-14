<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all();
        return view("index", ['message'=>$message]);
    }

    public function store(Request $request)
    {
        if ($request->message != null)
        {
            $message = new Message;
            $message->message = $request->message;
            $message->save();

            return redirect('/');
        } 
        return redirect('/');
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('update', ['message'=>$message]);
    }

    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        $message->message = $request->message;
        $message->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $message = Message::findOrfail($id);
        $message->delete();
        return redirect('/');
    }
}
