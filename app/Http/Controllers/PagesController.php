<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $title = 'We are Player Zero';
        return view('pages.index')->with('title', $title);
    }

    public function talents(){
        $title = 'Our Talents';
        return view('pages.talents')->with('title', $title);
    }

    public function partners(){
        $title = 'Our Team';
        return view('pages.partners')->with('title', $title);
    }

    public function newsletter(){
        return view('pages.newsletter');
    }
    
    public function newsletterSubmit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
            ]);
           Newsletter::create($request->all());
           return back()->with('success', 'Thank you for subscribing!');
    }

}
