<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function show(){
        return view('welcome');
    }
}
