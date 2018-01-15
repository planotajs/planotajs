<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

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
    public function edit(){
        
    }
}
