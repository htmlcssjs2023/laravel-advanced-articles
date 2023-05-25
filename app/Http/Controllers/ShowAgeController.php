<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAgeController extends Controller
{
    public function index(Request $request){
    echo "Welcome You're $request->age years Old";

    }
}
