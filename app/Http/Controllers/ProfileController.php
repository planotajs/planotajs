<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user = User::find(Auth::user()->id);
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;
        $created = $user->created_at;
        
        return view('profile', array('name' => $name, 'email' => $email, 'role' => $role, 'created' => $created));
    }
    public function store(Request $request){
        $data = $request->all();
            
        $rules = array(
            'name' => 'min:3|max:250|required',
            'email' => 'required|max:250|email',
            'cpassword' => 'required',
        );
        $this->validate($request, $rules);
        if(!Hash::check($data['cpassword'],User::find(Auth::user()->id)->password)){
            return Redirect::back()->withErrors(['cpassword', 'Wrong password']);
        }
        $user = User::find(Auth::user()->id);
        $user->update(['name' => $data['name']]);
        $user->update(['email' => $data['email']]);
        $user->save();
        return Redirect('profile');
    }
}
