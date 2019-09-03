<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Contact;
use Validator;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'      =>  'required|min:3|max:20',
            'email'     =>  'required|email|max:191',
            'subject'   =>  'required|max:191',
            'message'   =>  'required|max:191'
        ]);
        
        if ($validator->fails()) {
            return Redirect::to('/contact')->withErrors($validator);
        }

        $conatct = new Contact;
        $conatct->name      =   $request->input('name');
        $conatct->email     =   $request->input('email');
        $conatct->subject   =   $request->input('subject');
        $conatct->message   =   $request->input('message');
        $conatct->save();
        
        return redirect('/contact')->with('success', 'Your Application Has Been Sent');
    }
}
