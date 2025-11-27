<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class studentcontroler extends Controller
{
    //
    public function index (): string{
        return "The first massage from controller";
    }

//     Public function index ($id,$name): view{
//     return view("about",compact('id','name'));
// }
}

