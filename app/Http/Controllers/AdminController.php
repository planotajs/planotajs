<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;

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
    public function viewusers(){
        return view('viewusers');
    }
    public function viewall(){
        $records = Records::all();
        return view('viewrecords', array('records'=>$records));
    }
}
