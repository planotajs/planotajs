<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use App\User;

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
        $records = User::all();
        return view('viewusers', array('records'=>$records));
    }
    public function viewall(){
        $records = Records::all();
        return view('viewrecords', array('records'=>$records));
    }
}
