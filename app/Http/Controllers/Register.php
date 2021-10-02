<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index (){
        return view('auth.register');
    }

    public function store (Request $req){
        $this->validate($req, [
            'name'=>'required|max:255',
            'user'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=> $req->name,
            'email'=> $req->email,
            // Password is encrypted
            'password'=> Hash::make($req->password),
            'username'=> $req->user,
        ]);

        // Auto signed in when registering
        auth()->attempt($req->only('email', 'password'));


        return redirect()->route('dashboard');
    }
}
