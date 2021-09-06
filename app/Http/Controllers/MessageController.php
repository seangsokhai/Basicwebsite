<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Controllers\Controller;


class MessageController extends Controller
{
    //
    public function submit(Request $request){
        $this->validate($request,[ 
            "name" => "required",
            "email" => "required",
        
        ]);

        //create new message into data
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //then save 
        $message->save();

        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
            
        
    }
}
