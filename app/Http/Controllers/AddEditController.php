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
        $records = Records::where('user_id', Auth::user()->id)->get();        
        return view('edit', array('records'=>$records));
    }
    
    public function delete(Request $request){
        $data = $request->all();
        $rec = Records::find($data['id2'])->delete();
        return Redirect::to('/edit');
    }
    
    public function editrecord($id){
        $record = Records::find($id);
        $cat = Categories::all()->pluck('name');     
        $count = count($cat);
        for($i=$count; $i>0; $i--){
            $cat[$i] = $cat[$i-1];
        }
        unset($cat[0]);
        if($record->sum>0){
            $income = true;
        }
        else{
            $income = 0;
            $record->sum *=-1;
        }
            
        return view('editrecord', array('record' => $record, 'categories'=>$cat, 'income'=> $income));
    }
    
    public function store(Request $request){
        $data = $request->all();
        $rules = array(
            'name' => 'min:3|max:250|required',
            'type' => 'required|in:income,expense',
            'category' => 'required|exists:categories,id',
            'date' => 'required|date',
            'sum' => 'required|numeric|min:0.01'
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
    public function editnstore(Request $request){
        $data = $request->all();
        $rules = array(
            'name' => 'min:3|max:250|required',
            'type' => 'required|in:income,expense',
            'category' => 'required|exists:categories,id',
            'date' => 'required|date',
            'sum' => 'required|numeric|min:0.01'
        );
        $this->validate($request, $rules);
        $rec = Records::find($data['id']);
        $rec->update(['name' => $data['name']]);
        $rec->category()->associate(Categories::find($data['category']));
        $rec->update(['date'=>$data['date']]);
        if($data['type']=='income'){
            $rec->update(['sum'=>$data['sum']]);
        }
        else{
            $rec->update(['sum'=>-$data['sum']]);
        }
        $rec->save();
        return Redirect::to('/edit');
    }
}
