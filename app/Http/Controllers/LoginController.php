<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function loginPage(){
        return view('login');
    }
    public function loginPost(Request $req){
        $valid = Auth::attempt(['email' => $req->email,
                                'password' => $req->password
                                ], $req->rememberme);
        if (!$valid) {
            return redirect()->back()->withErrors('Authentication Error');
        }

        if ($req->remember_me) {
            Cookie::queue("email", $req->email);
            Cookie::queue("password", $req->password);
        } else {
            Cookie::queue(Cookie::forget("email"));
            Cookie::queue(Cookie::forget("password"));
        }

        Session::put("email", $req->email);

        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    public function registers(){
        return view('register');
    }
    public function register_post(Request $req){
        $valid= Validator::make($req->all(),[
            'name'=>'required|string|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirm'=>'same:password'

        ]);
        if ($valid->fails()){
            return back()->withErrors($valid);
        }
        // $valid['password']=Hash::make($req->password);
        // User::create($valid);
        $user = new User();
        $user->name= $req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
