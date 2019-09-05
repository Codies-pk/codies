<?php

namespace App\Http\Controllers\API;

use Alert;
use App\Quotes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|min:3|max:191',
            'last_name' => 'required|string|min:3|max:191',
            'phone' => 'required|numeric',
            'phone' => 'size:11',
            'message' => 'sometimes|required|min:6|max:255',
        ]);

        $quote = new Quotes;
        $quote->first_name = $request->input('first_name');
        $quote->last_name = $request->input('last_name');
        $quote->phone = $request->input('phone');
        $quote->message = $request->input('message');
        $quote->save();
        
        return ['message','success'];
    }
}
