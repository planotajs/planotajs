<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use Auth;
use App;
use App\Categories;

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
        $icategories = [];
        $ecategories = [];
        foreach (Records::where('user_id', Auth::user()->id)->where('sum','>',0)->orderBy('sum', 'desc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $icategories)){
                array_push($icategories, Categories::find($i->category_id)->name);
            }
        }
        foreach (Records::where('user_id', Auth::user()->id)->where('sum','<',0)->orderBy('sum', 'asc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $ecategories)){
                array_push($ecategories, Categories::find($i->category_id)->name);
            }
        }
        $icsum =[];
        $ecsum =[];
        foreach($icategories as $c){
            $icid = Categories::where('name', $c)->first()->id;
            $icsum[$c]=Records::where('user_id', Auth::user()->id)->where('category_id', $icid)->where('sum','>',0)->sum('sum');
        }
        foreach($ecategories as $c){
            $ecid = Categories::where('name', $c)->first()->id;
            $ecsum[$c]=Records::where('user_id', Auth::user()->id)->where('category_id', $ecid)->where('sum','<',0)->sum('sum');
        }  
        return view('statistics', array('sum' => $sum, 'income' => $income, 'expenses' => $expenses, 'icategories' => $icategories, 'icsum'=>$icsum, 'ecategories' => $ecategories, 'ecsum'=>$ecsum));
    }
}
