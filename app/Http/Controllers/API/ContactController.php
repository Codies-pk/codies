<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|min:3|max:20',
            'email'     =>  'required|email|max:191',
            'subject'   =>  'required|max:191',
            'message'   =>  'required|max:191'
        ]);

        $conatct = new Contact;
        $conatct->name      =   $request->input('name');
        $conatct->email     =   $request->input('email');
        $conatct->subject   =   $request->input('subject');
        $conatct->message   =   $request->input('message');
        $conatct->save();

        return ['message', 'success'];
    }
}
