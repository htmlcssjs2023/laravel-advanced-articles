<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request){
        return "$request->admin Welcome to this app";
    }
}
