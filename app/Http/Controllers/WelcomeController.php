<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Quote;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome($slug = null)
    {
        $categories = Category::where('status', true)->get();

        if($slug){
            $category = Category::where('slug', $slug)->first();
            $posts = Post::latest()->where('category_id', $category->id)->paginate(10);
        } else {
            $posts = Post::latest()->paginate(10);
        }

        return view('welcome', compact('posts','categories'));
    }

    public function postDetail($slug)
    {
        $categories = Category::where('status', true)->get();

        $post = Post::where('slug', $slug)->first();
        // dd($post);

        $quotes = Quote::where('post_id', $post->id)
                   ->orderBy('order', 'asc')
                   ->get();

        return view('post', compact('post','quotes','categories'));
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
