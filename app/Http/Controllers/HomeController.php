<?php

namespace App\Http\Controllers;

use App\Quotes;
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
}
