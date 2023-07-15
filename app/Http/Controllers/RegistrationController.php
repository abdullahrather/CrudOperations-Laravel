<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {

        $request->validate(
          [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'image'=>'required'
          ]
        );
        echo "<pre>";
        print_r($request->all());
        $fileName = time() . "-uploads." . $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('public/uploads', $fileName);
    }
}
