<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    //
    public function addData(){
        DB::table("centers")->insert([
            [
                "name"=>"Rahela",
                "lastName"=>"Qambari",
                "age"=> 18

            ],
              [
                "name"=>"Raha",
                "lastName"=>"Rahmani",
                "age"=> 24

            ],
              [
                "name"=>"Hamida",
                "lastName"=>"Shafayi",
                "age"=> 18

            ],
              [
                "name"=>"Alima",
                "lastName"=>"Mahdawy",
                "age"=> 16

            ],
        ]);
        return "Data Inserted";
    }

    public function fetchData(){
        $allcenter= DB::table("centers")->limit(4)->get();
        return $allcenter;
    }
    public function update(){
        DB::table("centers")->where("id",">","3")->update(['name'=>'layla']);
        return "update shod";
    }
    public function delete(){
        Db::table("centers")->where("id",">","3")->delete();
        return "Delete Successfully";
    }
    public function order(){
        DB::table("centers")->orderBy("id","desc")->get();
    }
}
