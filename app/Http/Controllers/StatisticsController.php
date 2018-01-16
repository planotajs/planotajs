<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use Auth;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function overview(){
        $records = Records::where('user_id', Auth::user()->id)->orderBy('date', 'desc')->get();  
        $sum = Records::where('user_id', Auth::user()->id)->sum('sum');
        return view('overview', array('records' => $records, 'sum' => $sum));
    }
    
    public function statistics(){
        return view('statistics');
    }
}
