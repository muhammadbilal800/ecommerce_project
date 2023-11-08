<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login',[
            'name'=> 'Sign in'
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password' => 'required'
        ]);

        if(!Auth::attempt(($request->only(['email','password'])),
        $request->remember
        )){
            return back()->with('failed','Email and Passwod does not match!');
        }

       if(Auth::user()->is_admin){
            return redirect('/admin/dashboard');
       }else{
            return redirect('/client');
       }
    }
}
