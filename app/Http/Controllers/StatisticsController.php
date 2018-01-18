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
        $this->middleware('language');
    }
    
    public function overview(){
        $records = Records::where('user_id', Auth::user()->id)->orderBy('date', 'desc')->get();  
        $sum = Records::where('user_id', Auth::user()->id)->sum('sum');
        return view('overview', array('records' => $records, 'sum' => $sum));
    }
    public function select(Request $request){
        $dates = $request->all();
        $rules = array(
            'startdate' => 'date|nullable',
            'enddate' => 'date|nullable'
        );
        $this->validate($request, $rules);
        if(!$dates['startdate']){
            $dates['startdate'] = Records::where('user_id', Auth::user()->id)->orderBy('date', 'asc')->first()->date;
        }
        if(!$dates['enddate']){
            $dates['enddate'] = Records::where('user_id', Auth::user()->id)->orderBy('date', 'desc')->first()->date;
        }
        $in = Records::where('user_id', Auth::user()->id)->where('sum','>',0)->whereBetween('date', array($dates['startdate'], $dates['enddate']));
        $out = Records::where('user_id', Auth::user()->id)->where('sum','<',0)->whereBetween('date', array($dates['startdate'], $dates['enddate']));  
        $income = $in->sum('sum');       
        $expenses = $out->sum('sum');
        $icategories = [];
        $ecategories = [];
        foreach ($in->orderBy('sum', 'desc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $icategories)){
                array_push($icategories, Categories::find($i->category_id)->name);
            }
        }
        foreach ($out->orderBy('sum', 'asc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $ecategories)){
                array_push($ecategories, Categories::find($i->category_id)->name);
            }
        }
        $icsum =[];
        $ecsum =[];
        foreach($icategories as $c){
            $icid = Categories::where('name', $c)->first()->id;            
            $icsum[$c]=Records::where('user_id', Auth::user()->id)->where('sum','>',0)->whereBetween('date', array($dates['startdate'], $dates['enddate']))->where('category_id', $icid)->get()->sum('sum');                          
        }
       
        foreach($ecategories as $c){
            $ecid = Categories::where('name', $c)->first()->id;
            $ecsum[$c]=Records::where('user_id', Auth::user()->id)->where('sum','<',0)->whereBetween('date', array($dates['startdate'], $dates['enddate']))->where('category_id', $ecid)->sum('sum');
        }  
        return view('statistics', array('income' => $income, 'expenses' => $expenses, 'icategories' => $icategories, 'icsum'=>$icsum, 'ecategories' => $ecategories, 'ecsum'=>$ecsum));
    }
    
    public function statistics(){        
        $in = Records::where('user_id', Auth::user()->id)->where('sum','>',0);
        $out = Records::where('user_id', Auth::user()->id)->where('sum','<',0);        
        $income = $in->sum('sum');       
        $expenses = $out->sum('sum');
        $icategories = [];
        $ecategories = [];
        foreach ($in->orderBy('sum', 'desc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $icategories)){
                array_push($icategories, Categories::find($i->category_id)->name);
            }
        }
        foreach ($out->orderBy('sum', 'asc')->get() as $i){
            if(!in_array(Categories::find($i->category_id)->name, $ecategories)){
                array_push($ecategories, Categories::find($i->category_id)->name);
            }
        }
        $icsum =[];
        $ecsum =[];
        foreach($icategories as $c){
            $icid = Categories::where('name', $c)->first()->id;
            $icsum[$c]=Records::where('user_id', Auth::user()->id)->where('sum','>',0)->where('category_id', $icid)->sum('sum');
        }
        foreach($ecategories as $c){
            $ecid = Categories::where('name', $c)->first()->id;
            $ecsum[$c]=Records::where('user_id', Auth::user()->id)->where('category_id', $ecid)->where('sum','<',0)->sum('sum');
        }  
        return view('statistics', array('income' => $income, 'expenses' => $expenses, 'icategories' => $icategories, 'icsum'=>$icsum, 'ecategories' => $ecategories, 'ecsum'=>$ecsum));
    }
}
