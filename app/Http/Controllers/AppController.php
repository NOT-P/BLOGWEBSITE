<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    ## index page
    public function index(){
        //return "hello";
        return view('index');
    }

    ## aboute page
    public function aboutUs(){
        return view(view: 'about-us');
        
    }

    ## contact page
    public function contactUs(){
        return view(view: 'contact-us');
        
    }

    ## blogs page
    public function blogs(){
        return view('blog');
        
    }

    ## blog page
    public function blog(){
        return "hello";;
        
    }
}
