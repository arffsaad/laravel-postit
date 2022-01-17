<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function insert(Request $request){
        $data = $request->all();
        Posts::create([
            'content' => $data['content'],
            'username' => $data['username']
        ]);
        return back();
    }

    public function display(){
        $posts = Posts::all();
        return view('welcome', compact('posts'));
    }
}
