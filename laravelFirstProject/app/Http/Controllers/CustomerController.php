<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $customer = new Customer();
        $title = "Registration";
        $data = compact('url', 'title', 'customer');
        return view('customer')->with($data);
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
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    //Delete Query
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            //not found
            return redirect('customer/view');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $title = "Update";
            $data = compact('customer', 'url', 'title');
            return view('customer')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->DOB = $request['DOB'];
        $customer->save();

        return redirect('customer/view');
    }
}
