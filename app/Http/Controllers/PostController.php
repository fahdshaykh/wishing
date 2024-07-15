<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();

        if($request->image){

            $originalFile = $request->file('image');

            $originalFile->move(public_path().'/post_images/', $post_file = time().'.'.$originalFile->getClientOriginalExtension());

            $post->image = $post_file;

        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        session()->flash('status', 'New post was created!');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if($request->image){
            
            $document_path = public_path()."/post_images/".$post->image;  // Value is not URL but directory file path

            if(File::exists($document_path)) {

                File::delete($document_path);
            }

            $originalFile = $request->file('image');

            $originalFile->move(public_path().'/post_images/', $post_file = time().'.'.$originalFile->getClientOriginalExtension());

            $post->image = $post_file;

        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();



        session()->flash('success', 'New post was Updated!');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Storage::delete($post->image);
        $image_path = public_path()."/post_images/".$post->image;  // Value is not URL but directory file path

        if(File::exists($image_path)) {

            File::delete($image_path);
        }

        $post->delete();

        session()->flash('success', 'New post was Deleted!');

        return redirect()->route('posts.index');
    }
}
