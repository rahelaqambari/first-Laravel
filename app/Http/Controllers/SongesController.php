<?php

namespace App\Http\Controllers;

use App\Models\Songes;
use Illuminate\Http\Request;

class SongesController extends Controller
{
    // 
     public function create(Request $request){
        // Form validation
        $song = new Songes();
        $filepath = null;
        if($request->hasFile('song')){
            $filepath = $request->file('song')->store('songs','public');
        }
        $song->singer = $request->singer;
        $song->song = $filepath;
        $song->save();
        return redirect("songs");
    }
    public function index(){
       $song =  Songes::all();
       return view('song.home',compact('song'));
    }
}
