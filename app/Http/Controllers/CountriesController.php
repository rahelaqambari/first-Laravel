<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //
    public function index (){
         $allCountries = Countries::all();
        return view("customers",["all"=>$allCountries]);
    }
}
