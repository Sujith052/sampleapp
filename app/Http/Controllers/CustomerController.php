<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('adminhome');
    }

    public function registration(){
        return view('registration');
    }

    public function regaction(Request $request){

        $customer = new customer;

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        $customer->save();

    }

    public function regview(){
        $data = customer::all();
        return view('registerview',compact('data'));
    }

    public function updatedata($id){
        $customer = customers::find($id);
        return view('updateview',compact('customer'));
    }
}
