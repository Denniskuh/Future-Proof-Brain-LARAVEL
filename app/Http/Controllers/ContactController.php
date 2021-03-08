<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    public function contactUs(Request $request)
    {
        //Form validation
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'subject' => 'New message from website',
            'message' => 'required'
        ]);

        //  Send mail to admin
        \Mail::send('mail', array(
            'email' => $request->get('email'),
            'subject' => 'Message from website',
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('dennis.ego@hotmail.be', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Bedankt om ons te contacteren! We connecteren je zo snel mogelijk met de juiste persoon.');
    }
}
