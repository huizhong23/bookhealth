<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profiles;

class ProfileController extends Controller
{
    public function addProfile() {
        return view('add-profile');
    }

    public function saveProfile(Request $request) {
        DB::table('profiles')->insert([
            'fullname' => $request -> fullname,
            'icnum' => $request -> icnum,
            'contact' => $request -> contact,
            'email' => $request -> email,
            'homeadd' => $request -> homeadd
        ]);

        return back()->with('profile_add', 'Profile added successfully');
    }

    public function myProfile() {
        $profiles = DB::table('profiles')->get();
        return view('profile-my',compact('profiles'));
    }

    public function editProfile() {
        $profiles = DB::table('profiles');
        return view('edit-profile', compact('profiles'));
    }

    public function updateProfile(Request $request) {
       DB::table('profiles')->update([
            'fullname' => $request -> fullname,
            'icnum' => $request -> icnum,
            'contact' => $request -> contact,
            'email' => $request -> email,
            'homeadd' => $request -> homeadd
       ]);
       return back()->with('profile_update','Profile updated successfully');
    }

    public function display($id) {
        $data = Profiles::findOrFail($id); 
        return view('myprofile', compact('data'));
    }
    
}
