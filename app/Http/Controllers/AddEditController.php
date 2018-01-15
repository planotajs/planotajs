<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEditController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add(){
        return view('add');
    }
    
    public function edit(){
        return view('edit');
    }
}
