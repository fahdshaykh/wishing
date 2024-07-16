<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome($id = null)
    {
        $categories = Category::where('status', true)->get();

        if($id){
            $posts = Post::latest()->where('category_id', $id)->paginate(5);;
        } else {
            $posts = Post::latest()->paginate(10);
        }

        return view('welcome', compact('posts','categories'));
    }

    public function postDetail($id)
    {
        $categories = Category::where('status', true)->get();

        $post = Post::findOrFail($id);

        return view('post', compact('post','categories'));
    }

}
