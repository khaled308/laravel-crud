<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts = Post::all();
        return view('index',['posts'=>$posts]);
    }

    function edit(Post $post){
        return view('edit',['post'=>$post]);
    }

    function create(){
        return view('create');
    }

    function store(){
        request()->validate([
            'title' => 'required',
            'content'=>'required'
        ]);

        Post::create([
            'title' => request('title'),
            'content'=> request('content')
        ]);

        return redirect('/posts');
    }
    function update(Post $post){

        request()->validate([
            'title' => 'required',
            'content'=>'required'
        ]);

        $post->update([
            'title' => request('title'),
            'content'=> request('content')
        ]);
        return redirect('/posts');
    }
}
