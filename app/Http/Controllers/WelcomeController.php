<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();

        return view('welcome', compact('posts'));
    }

    public function postDetail($id)
    {
        $post = Post::findOrFail($id);

        return view('post', compact('post'));
    }
}
