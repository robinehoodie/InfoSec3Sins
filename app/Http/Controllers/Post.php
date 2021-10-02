<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function index(){
        return view('post.index');
    }

    public function store(Request $req){
        $this->validate($req, [
            'body' => 'required'
        ]);
    }
}
