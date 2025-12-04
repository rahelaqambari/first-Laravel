<?php

namespace App\Http\Controllers;
use App\Models\Employees;
use DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //
    public function seeData(){
        $allemplo = DB::table("employees")->get();
        return $allemplo;
    }
    public function addinfo(){
         $em = new Employees();
         $em-> name="Rahela";
         $em->lastName="Rahmani";
         $em->age=11;
         $em->save();
         return "Add rahela";

    }
    public function read(){
        // $allem= Employees::select("name","lastName",'age')->get();
        $allem= Employees::all();
        // $allem= Employees::whereBetween("id",[1,9])->get();
        // $allem= Employees::whereIn("id",[1,9,4,8,14,12,9])->get();
        // $allem= Employees::whereNotBetween("id",[1,9,4,8,14,12,9])->get();
        // $allem= Employees::where("id",">",5)->where(function($qurey){
        //     $qurey->where("age",">",30)->orwhere("age","<",20);
        // })->get();
        return $allem;

    }
    public function change(){
        $changeemplo = Employees::find(2);
        $changeemplo->name="Amir Hasam";
        $changeemplo->lastName="Faramarz";
        $changeemplo->age="24";
        $changeemplo->update();
        return "Data update shoda";
    }

    public function childLadies(){
        $female = Employees::female()->where("age","<",18)->get();
        return $female;
    }

      public function YoungLadies(){
        $female = Employees::female()->where(function ($qurey){
        $qurey->where("age","<=",40)->where("age",">",18);
        })->get();
        return $female;
    }
      public function oldLadies(){
        $female = Employees::female()->where("age",">",40);
        return $female;
    }

    public function deleted(){
        Employees::findOrFail(3)->delete();
        return "one item is deleted";
    }
    public function showD(){
       $empolyee = Employees::onlyTrashed()->get();
    //    $empolyee = Employees::withTrashed()->get();
       return $empolyee;
    }
    public function restore(){
        Employees::withTrashed()->findOrFail(1)->restore();
        return "one item is restored";
    }

    public function fetchemployee(Request $request){
        $employee = Employees::when($request->search,function($qurey) use($request){
          $qurey->whereAny([
            "name",
            "lastName",
            "age",
            "gender",
          ],"LIKE",'%'.$request->search.'%');  
        })->paginate(12);
       return view("Employee.home",compact('employee'));
    }
  


}
