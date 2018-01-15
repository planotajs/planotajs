<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function overview(){
        return view('overview');
    }
    
    public function statistics(){
        return view('statistics');
    }
}
