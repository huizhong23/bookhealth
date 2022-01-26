<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }
    
    public function registration() {
        return view("auth.registration");
    }

    public function registerUser(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res) {
           return back()->with('success','You have registered successfully!');
        }else{
            return back()->with('fail', 'Something went wrong. Please try again later.');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user) {
            if(hash::check($request->password,$user->password)) {
                $request->session()-> put('loginId', $user->id);
                return redirect('homepage');
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function homepage(){
        return view('homepage');
    }

    public function healthinfo(){
        return view('healthinfo');
    }

    public function serviceschedule() {
        return view('serviceschedule');
    }

    
}
