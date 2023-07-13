<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function index()
    {
        return view('homee');
    }

    function about()
    {
        return view('about');
    }

    function course(){
        return view('course');
    }
}
