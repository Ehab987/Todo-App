<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ContactRequest;

class MessageController extends Controller
{
    public function store(ContactRequest $request) {

        Message::create([
            'name' => $request -> name,
            'email' => $request ->email,
            'message' => $request -> message
        ]);
        return redirect('/')->with(['success' =>'Message Sent']);
    }
    public function getMessages(){
        $messages =  Message::get();
        return view('pages.message',compact('messages'));
    }

     
}
