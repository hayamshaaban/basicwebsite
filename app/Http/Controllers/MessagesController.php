<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|email'
       ]);
       $message=new Message;
       $message->name=$request->name;
       $message->email=$request->email;
       $message->message=$request->message;
        //save
        $message->save();
        //redirect
        session()->flash('success',('Message Added Succefully'));
        return redirect('/');
    }

    public function getmessages(){
        $messages=Message::paginate(5);
        return view('messages',compact('messages'));
    }
}
