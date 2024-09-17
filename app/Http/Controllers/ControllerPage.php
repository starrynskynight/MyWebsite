<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    public function home () {
        return view('home');
    }
    public function about () {
        return view('about');
    }
    public function life () {
        return view('life');
    }
    public function contact () {
        return view('contact');
    }
}
