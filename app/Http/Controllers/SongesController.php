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
        // $request->validate([
        //     "singer"=>"required|string|max:30",
        //     "song"=>"nullable|audio|mimes:mp3,wav|max:12288"
        // ]);
        $filepath = null;
        if($request->hasFile('')){
            $filepath = $request->file('song')->store('songs','public');
        }
        $song->singer = $request->singer;
        $song->song = $request->$filepath;
        $song->save();
        return redirect("/");
    }
    public function index(){
       $song =  Songes::all();
       return view('song.home',compact('song'));
    }
}
