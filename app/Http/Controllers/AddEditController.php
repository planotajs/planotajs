<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Records;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AddEditController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add(){
        $cat = Categories::all()->pluck('name');     
        $count = count($cat);
        for($i=$count; $i>0; $i--){
            $cat[$i] = $cat[$i-1];
        }
        unset($cat[0]);
        return view('add', array('categories'=>$cat));
    }
    
    public function edit(){
        return view('edit');
    }
    
    public function store(Request $request){
        $data = $request->all();
        $rules = array(
            'name' => 'min:3|max:250|required',
            'type' => 'required|in:income,expense',
            'category' => 'required|exists:categories,id',
            'date' => 'required|date',
            'sum' => 'required|numeric|min:0'
        );
        $this->validate($request, $rules);
        $rec = new Records();
        $rec->name = $data['name'];
        $rec->category()->associate(Categories::find($data['category']));
        $rec->date = $data['date'];
        $rec->user()->associate(User::find(Auth::user()->id));
        if($data['type']=='income'){
            $rec->sum = $data['sum'];
        }
        else{
            $rec->sum = -$data['sum'];
        }
        $rec->save();
        return Redirect::to('/edit');
    }
}
