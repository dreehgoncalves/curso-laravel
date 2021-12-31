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

    public function debug(Request $request)
    {
        // var_dump($request->except(['_token']));

        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->save();

        // $post->create($request->except(['_token']));

        return redirect()->route('showForm');
    }

    public function show(Post $post)
    {
        echo "<p>{$post->id}, {$post->title}, {$post->content}</p>";

        $user = $post->user()->first();
        $categories = $post->categories()->get();

        if ($user) {
            echo "<p>Nome: {$user->name} Email: {$user->email}</p>";
        }

        if ($categories) {
            foreach ($categories as $category) {
                echo "<p>{$categories->id}, {$categories->title}";
            }
        }
    }
}
