<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Mail::send('emails.contact-message',[
            'msg' => $request->message,
            'phone' =>$request->phone,
            'email' =>$request->email
        ],function($mail) use($request){
            $mail->from($request->email,$request->name);

            $mail->to('vesitrnd@ves.ac.in')->subject('Contact Form');
        });

        return redirect()->back()->with('flash_message','Thank You for the Message');
    }
}
