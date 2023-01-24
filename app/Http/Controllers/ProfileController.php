<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function edit_view(){
        $category = Category::all();
        return view('editprofile',['category'=>$category]);
    }
    public function edit_profile(Request $req){
        $this->validate($req,[
            'name'=>'required|string|min:3',
            'email'=>'required|email|unique:users'
        ]);
        $req->user()->update($req->all());

        return redirect()->route('home');
    }
    public function changepw_view(){
        $category=Category::all();
        return view('changepw',['category'=>$category]);
    }
    public function change_pw(Request $req){
        $this->validate($req,[
            'current_password'=>'required|string',
            'password'=>'required|min:6',
            'password_confirm'=>'same:password'
        ]);
        $auth = Auth::user();
        if (!Hash::check($req->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
        if (strcmp($req->get('current_password'), $req->password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $user =  User::find($auth->id);
        $user->password =  Hash::make($req->password);
        $user->save();
        return back()->with('success','password was changed');
    }
}
