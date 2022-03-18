<?php

namespace App\Http\Controllers;

use App\Models\Train;

class MyController extends Controller
{
    public function index(){
        return view('home');
    }
}
