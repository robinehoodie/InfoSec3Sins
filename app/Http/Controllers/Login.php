<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(){


        return view('auth.login');
    }

    public function store(Request $req){
        $this->validate($req, [
            'email'=>'required',
            'password'=>'required'
        ]);

        // This is a way to sign in without use of values stated in #3
        if(!auth()->attempt($req->only('email', 'password'), $req->remember)){
            return back()->with('status', 'Invalid login details');
        }


        return redirect()->route('dashboard');

    }
}
