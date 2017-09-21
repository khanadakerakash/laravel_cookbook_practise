<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//    public function home()
//    {
//        return view('home');
//    }

    public function about()
    {
        return view('about');
//        Alert::info('Welcome to our website', 'Hi! This is a Sweet Alert message!');
    }

    public function contact()
    {
        return view('contact');
    }
}
