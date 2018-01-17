<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use Auth;
use App;

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
        $income = Records::where('user_id', Auth::user()->id)->where('sum','>',0)->sum('sum');
        $expenses = Records::where('user_id', Auth::user()->id)->where('sum','<',0)->sum('sum');
        $sum = Records::where('user_id', Auth::user()->id)->sum('sum');
        $records = Records::where('user_id', Auth::user()->id)->get();
        $incRec = Records::where('user_id', Auth::user()->id)->where('category_id')->sum('sum');
        return view('statistics', array('sum' => $sum, 'income' => $income, 'expenses' => $expenses, 'records' => $records, 'incRec' => $incRec));
    }
}
