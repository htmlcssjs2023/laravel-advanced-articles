<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\first;
use App\Http\Middleware\second;
use App\Http\Middleware\CheckAgeMiddleware;
use App\Http\Controllers\ShowAgeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

// If you have multiple route in route group but you want to check each route before run;
// Route::middleware(['first', 'second'])->group(function () {
//         Route::get('/profile', function (Request $request) {
//         return "Welcome ".$request->name."!";
//     });

//         Route::get('/user/profile', function (Request $request) {
//         return "Welcome ".$request->user."!";
//     });
// });


// Route::get('/getall', function()
// {
//         $fetchData = DB::select('select * from sm_students');
//         echo "<pre>";
//         print_r($fetchData);
//         echo "</pre>";

// });

// Route::get('/users/{user}', function(User $user){
//         return $user->name . " <br> " . $user->email;
// });


// Middleware 

Route::middleware([CheckAgeMiddleware::class])->group(function(){
    Route::get('showage', [ShowAgeController::class,'index']);
});


Route::middleware([AdminMiddleware::class])->group(function(){
    route::get('admin', [AdminController::class, 'admin']);
});