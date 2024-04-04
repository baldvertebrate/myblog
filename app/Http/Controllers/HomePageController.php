<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function aboutindex()
    {
        return view('layouts.about');
    }
    public function contactus()
    {
        return view('layouts.contactus');
    }
    public function home()
    {
        return view('layouts.home');
    }
}
