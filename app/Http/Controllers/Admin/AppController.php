<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    #Dashboard page

    public function dashboard(){
        return view('Admin.dashboard');
    }

    public function categories(){
        return view('admin.categories.index');
    }

    public function addCategory(){
        return view('Admin.categories.add');
    }
    
}
