<?php

namespace App\Http\Controllers;

use App\Quotes;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('index')->with('title', 'Home');
    }

    public function about() {
        return view('about')->with('title', 'About');
    }

    public function services() {
        return view('services')->with('title', 'Services');
    }

    public function portfolio() {
        return view('portfolio')->with('title', 'Portfolio');
    }

    public function contact() {
        return view('contact')->with('title', 'Contact');
    }
    public function contactPost(Request $request) {
        $this->validate($request, [
            'name'      =>  'required|min:3|max:20',
            'email'     =>  'required|email|max:191',
            'subject'   =>  'required|min:3|max:191',
            'message'   =>  'required|min:3|max:191'
        ]);

        $conatct = new Contact;
        $conatct->name      =   $request->input('name');
        $conatct->email     =   $request->input('email');
        $conatct->subject   =   $request->input('subject');
        $conatct->message   =   $request->input('message');
        $conatct->save();

        return view('contact')->with('title', 'Contact');
    }
}
