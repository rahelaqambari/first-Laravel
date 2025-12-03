<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\studentcontroler;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\CountriesController;

// use App\Http\Controllers\testcontroller;
// use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// ROUTE FOR TESTING PURPOSES
ROUTE::get('/test', function(){
    return "This is a test route.";
});
// route and with view
route::get("about", function(){
    $myname = "Rahela";
    $Myclass = "Laravel";
    return view("about")->with('name',$myname)->with("class", $Myclass);
});
// GROUPING ROUTING
route::get("/services/{name}", function($name){
    return view("services")->with('name',$name);
});

route::get("/home", function(){
    return view("home");
});

route::get("/blog", function(){
    return view("blog");
});

Route::prefix("/admin")->group(function(){
    Route::get("/Dashbord" , function(){
    return "This is Admin details page";
});
route::get("/user" , function(){
    return "this is admin user page";
});
});
// DAYNAMIK ROUTING
Route::get('/student/{id}', function ($id) {
    return "the Student id is " . $id;
});

Route::get('/name/{n}', function($n) {
    return view('name')->with(
        'name',$n
    );
});

Route::get("view3/{name}",function($name){
    return view('name',["name"=>$name]);
});



// Route::get('/user/{id}', function ($id) {
//     return "شناسه کاربر: " . $id;
// });

// Controller routes
Route::get("student",[studentcontroler::class,'index']);

//
// Route::resource("teacher",teachercontroller::class);
// Route::get("invok",[testcontroller::class]);

// Route::get("allcustomers",function(){
//     return Customer::all();
// });
Route::get("allcustomers",[CustomerController::class, 'index']);
Route::get("fruits",[FruitsController::class,'index']);
Route::get("fruits/add",[FruitsController::class,'add']);
Route::get("fruitsh/{id}",[FruitsController::class,'show']);
Route::get("fruitu/{id}",[FruitsController::class,'update']);
Route::get("fruitd/{id}",[FruitsController::class,'delete']);

Route::get("allCuontries",[CountriesController::class, 'index']);

Route::get("addData",[CenterController::class, "addData"]);
Route::get("fetchData",[CenterController::class, "fetchData"]);
Route::get("update",[CenterController::class, "update"]);
Route::get("delete",[CenterController::class, "delete"]);
Route::get("order",[CenterController::class, "order"]);



// curd in the Eloquent ORM
Route::get("seeData",[EmployeesController::class, "seeData"]);
Route::get("addinfo",[EmployeesController::class, "addinfo"]);
Route::get("read",[EmployeesController::class, "read"]);
Route::get("change",[EmployeesController::class, "change"]);

// Query Scop
Route::get("ladiesc",[EmployeesController::class, "childLadies"]);
Route::get("ladiesy",[EmployeesController::class, "YoungLadies"]);
Route::get("ladieso",[EmployeesController::class, "oldLadies"]);


// Delete part
Route::get("hazf",[EmployeesController::class, "deleted"]);
Route::get("showD",[EmployeesController::class, "showD"]);
Route::get("restor",[EmployeesController::class, "restore"]);

// grouping routes
Route::prefix('employee')->controller(EmployeesController::class)->group(function(){
    Route::get('/','fetchemployee');
}); 