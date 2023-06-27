<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        //Insert Query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->DOB = $request['DOB'];
        $customer->password = password_hash($request['password'], (PASSWORD_DEFAULT));
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $customers=Customer::all();
        $data=compact('customers');
        return view('customer-view')->with($data);
    }
}
