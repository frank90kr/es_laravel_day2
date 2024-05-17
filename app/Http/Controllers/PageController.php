<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //inseriamo le funzioni delle pagine statiche

    public function home()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }
}
