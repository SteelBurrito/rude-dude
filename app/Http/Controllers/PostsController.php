<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Michelf\Markdown;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = Post::latest()->Paginate(1);
        return view ('posts.index', compact('posts'));
    }

    public function createpage()
    {
        return view ('posts.create');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view ('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $bodyDB = json_decode('body');
        Post::create([
    		'title' => $request->input('postTitle'),
    		'body' => $request->input('postBody')
        ]);
        
        return redirect('/posts');
    }

    public function me()
    {
        return view ('bio.me');
    }
}
