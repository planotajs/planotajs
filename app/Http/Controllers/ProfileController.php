<?php

namespace App\Http\Controllers;
use App\User;
use App\Records;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Mail;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('language');
    }
    
    public function index(){         
        $user = User::find(Auth::user()->id);
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;
        $created = $user->created_at;
        $language = $user->language;
        return view('profile', array('name' => $name, 'email' => $email, 'role' => $role, 'created' => $created, 'language'=>$language));
    }
    public function store(Request $request){
        $data = $request->all();
        $rules = array(
            'name' => 'min:3|max:250|required',
            'email' => 'required|max:250|email',
            'cpassword' => 'required',
            'npassword' => 'min:6|confirmed|sometimes|different:cpassword|nullable'
        );
        if($data['npassword']){
            $rules['npassword_confirmation']='required';
        }
        $this->validate($request, $rules);
        if(!Hash::check($data['cpassword'],User::find(Auth::user()->id)->password)){
            return back()->with("status", "Wrong current password");
        }
        $user = User::find(Auth::user()->id);
        $user->update(['name' => $data['name']]);
        $user->update(['email' => $data['email']]);
        if($data['npassword']){
            $user->update(['password'=>bcrypt($data['npassword'])]);
        }
        $user->save();
        return Redirect('profile');
    }
    public function delete(Request $request){
        $data = $request->all();
        if(!Hash::check($data['password'],User::find(Auth::user()->id)->password)){
            return back()->with("status", "Wrong password");
        }
        Records::where('user_id', Auth::user()->id)->delete();
        User::find(Auth::user()->id)->delete();
         echo "<script>alert('Your profile was deleted successfully');document.location='/'</script>";
        //return Redirect::to('/')->withMessage('Your profile was deleted successfully');
        
    }
    public function contact(){
        return view('contact');
    }
    public function sendmessage(Request $request){
        $data = $request->all();
        $rules = array(
            'message' => 'min:3|max:10000|required',
        );
        $this->validate($request, $rules);
        $message = $data['message'];
        Mail::raw($message, function($message) {
           $message->to(config('mail.username'))->subject('FinancialPlanner message');
           $message->from(config('mail.username'), Auth::user()->email);
        });
        return back()->with("status",'Message sent successfully!');
    }
    public function lang(){
        $curr = User::find(Auth::user()->id)->language;        
        if($curr==2){
            User::find(Auth::user()->id)->update(['language'=>1]);
        } else {
            User::find(Auth::user()->id)->update(['language'=>2]);
        }
        User::find(Auth::user()->id)->save();
        return back();
    }
}
