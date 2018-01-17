<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        return view('admin');
    }
    public function addcat(){
        return view('addcat');
    }
    public function viewall(){
        return view('viewrecords');
    }
    public function viewusers(){
        return view('viewusers');
    }
}
