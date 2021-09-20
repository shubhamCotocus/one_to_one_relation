<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;

class CustomerController extends Controller
{
    public function add_customer()
    {
    
        $customer = new Customer();
        $customer->name="sam";
        $customer->email="sam@gmail.com";
        $customer->save();
        
        $mobile = new Mobile();
        $mobile->model = "oppo12";
        $customer->mobile()->save($mobile);   //save mobile on customer
        dd($customer->name);
        return $customer;

    }
    public function show_mobile($id)
    {
        $mobile = Customer::find($id)->mobile;
        //dd($mobile);
        //return $mobile;
        return view('mobile',['mobile'=>$mobile]);
        

        //return view('show_mobile',['mobile'=>$mobile]);
    }

}