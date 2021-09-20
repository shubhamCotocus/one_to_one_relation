<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;

class IndexController extends Controller
{
    public function index($id)
    {
        // $customer = Customer::find($id);
        // //dd($customer);
        // dd($customer->name);
        // var_dump($customer->name);
        // var_dump($customer->email);
        // var_dump($customer->mobile->model);

        $mobile = Customer::find($id)->mobile;
        dd($mobile);

        $customer = Mobile::find($id)->customer;
        dd($customer);
    }
}
