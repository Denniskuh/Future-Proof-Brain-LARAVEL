<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //MAKE THE FORM
    public function createForm(Request $request)
    {
        return view('contact');
    }

    //VALIDATE AND SEND THE EMAIL
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
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('dennis.ego@hotmail.be', 'Dennis Ego')->subject('Message from website');
        });

        return back()->with('success', 'Bedankt om ons te contacteren! We connecteren je zo snel mogelijk met de juiste persoon.');
    }
}
