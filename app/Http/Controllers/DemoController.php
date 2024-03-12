<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){
        return view('home1');
    }

    public function about(){
        return view('about');
    }
} 
