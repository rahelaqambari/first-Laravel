<?php

namespace App\Http\Controllers;

use App\Models\fruits;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    //
    public function index(){
        return fruits::all();
    }
    
    public function add(){
        $fruits = new fruits();
        $fruits->name="charry";
        $fruits->price="120";
        $fruits->country_name="Afghani";
        $fruits->save();
        return "charry added";
    }
    public function show($id){
        $fruits = new fruits();
        $single = $fruits->findOrFail($id);
        return $single;

    }
    public function update($id){
        $item = new fruits();
        $single = $item->findOrFail($id);
        $single->name = "banana";
        $single->price = 350;
        $single->update();
        return "updated successfully";
    }
    public function delete($id){
        $item = new fruits();
        $deleteditem= $item->findOrFail($id);
        $deleteditem->delete();
        return "item deleted succecssfully";

    }
}
