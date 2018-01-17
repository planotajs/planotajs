<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use App\User;
use App\Categories;

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
    public function store(Request $request){
        $data = $request->all();
        $rules = array(
            'name' => 'min:3|max:250|required',
        );
        $this->validate($request, $rules);
        $data['name'] = ucfirst($data['name']);
        $cat = Categories::all()->pluck('name')->toArray();        
        if(in_array($data['name'],$cat)){
            return back()->with('err','Already exists');
        }
        $new = new Categories();
        $new->name = $data['name'];
        $new->save();
        return back()->with('status','Successfully added');
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
