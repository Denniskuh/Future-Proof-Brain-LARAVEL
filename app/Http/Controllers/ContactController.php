<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //MAKE THE FORM
    public function createForm(Request $request)
    {
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }

    //VALIDATE AND SEND THE EMAIL
    public function contactUs(Request $request)
    {
        //Form validation
        $this->validate($request, [
            'email' => 'required|string|email|max:255',            
            'message' => 'required'
        ]);

        //  Send mail to admin
        \Mail::send('pages.mail', array(
            'email' => $request->get('email'),
            'subject' => 'FUTURE PROOF BRAIN - Message from website',
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ann-caroline.roymans@acr-solutions.com', 'Ann-Caroline Roymans')
            ->subject('FUTURE PROOF BRAIN - Message from website')
            ->getSwiftMessage()
            ->getHeaders()
            ->addTextHeader('x-mailgun-native-send', 'true');
            $message->replyTo($request->email);
        });

        return back()->with('success', 'Bedankt om ons te contacteren! We connecteren je zo snel mogelijk met de juiste persoon.');
    }
}
