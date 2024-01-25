<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidController extends Controller
{
    public function home(){
        return view('kid/home');
        
    }
    public function about(){
        return view('kid/about');
        
    }
    public function class(){
        return view('kid/class');
        
    }
    public function teacher(){
        return view('kid/teacher');
        
    }
    public function gallery(){
        return view('kid/gallery');
        
    }
    public function contact(){
        return view('kid/contact');
        
    }
    public function joinclass(){
        return view('kid/joinclass');
        
    }
}
