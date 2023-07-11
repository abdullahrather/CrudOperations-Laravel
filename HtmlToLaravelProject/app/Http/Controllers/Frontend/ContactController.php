<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function upload(Request $request)
    {
        $fileName = time() . "-laravel." . $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('uploads', $fileName);
    }
}
