<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\fruits;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $allCustomers = Customer::all();
        return view("customers",["all"=>$allCustomers]);
    }
    
}
