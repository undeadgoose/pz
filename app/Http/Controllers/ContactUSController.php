<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
         'first_name' => 'required',
         'last_name' => 'required',
         'contact_number' => 'required',
         'email' => 'required|email',
         'message' => 'required'
         ]);
        ContactUS::create($request->all());
        
        // // Send Email

        // $to_email = "theflash21301@gmail.com";
        
        // $data = [
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'contact_number' => $request->contact_number,
        //     'email' => $request->email,
        //     'message' => $request->message,
        //     'from' => 'jasonduff26@gmail.com',
        //     'from_name' => 'Player Zero',
        //     'subject' => 'Contact Form'
        // ];

        // Mail::to($to_email)->send(new SendMail ($data));
        
        return back()->with('success', 'Thank you for contacting us!');
    }
 
}
