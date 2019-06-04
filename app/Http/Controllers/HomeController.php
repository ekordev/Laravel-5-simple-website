<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome' );
    }
    public function about(){
        return view('about' );
    }
    public function contact(){
        return view('contact' );
    }
    public function services(){
        return view('services' );
    }
    public function portfolio(){
        return view('portfolio' );
    }
    public function emergency(){
        return view('emergency' );
    }
    public function commercial(){
        return view('commercial' );
    }
    public function waterheater(){
        return view('waterheater' );
    }
    public function sewer(){
        return view('sewer' );
    }
    public function camera(){
        return view('camera' );
    }
    public function drain(){
        return view('drain' );
    }
    public function kitchenbath(){
        return view('kitchenbath' );
    }
    
        
}
