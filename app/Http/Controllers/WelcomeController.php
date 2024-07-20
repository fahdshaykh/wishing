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
            $posts = Post::latest()->where('category_id', $id)->paginate(10);
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

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $posts = Post::where(function ($query) use ($searchTerm) {
            $query->where('title', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('content', 'LIKE', '%' . $searchTerm . '%');
        })->orWhereHas('category', function ($query) use ($searchTerm) {
            $query->where('title', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('content', 'LIKE', '%' . $searchTerm . '%');
        })->latest()->paginate(10);

        $categories = Category::where('status', true)->get();

        return view('welcome', compact('posts','categories'));
    }

}
