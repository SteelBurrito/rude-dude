<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = \DB::table('posts')
                    ->orderBy('created_at')
                    ->get();
        return view ('posts.index', compact('posts'));
    }

    public function createpage()
    {
        return view ('posts.create');
    }

    public function store(Request $request)
    {
        // print_r($request->all()); die;
        Post::create([
    		'title' => $request->input('postTitle'),
    		'body' => $request->input('postBody'),
        ]);
        
        return redirect('/posts');
    }


    public function me()
    {
        return view ('bio.me');
    }
}
