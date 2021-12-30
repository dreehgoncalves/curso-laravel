<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function debug(Request $request){

        // var_dump($request->except(['_token']));

        $post = new Post();
        $post->title = $request ->title;
        $post->subtitle = $request ->subtitle;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->save();

        // $post->create($request->except(['_token']));

        return redirect()->route('showForm');

    }
}
