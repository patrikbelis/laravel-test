<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single post
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Show create form for new post
    public function create()
    {
        return view('posts.create');
    }

    // Store new post
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created! Yaaay!');
    }

    // Show edit form for post
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // Show edit form for post
    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        $post->update($formFields);

        return redirect('/posts/' . $post->id)->with('message', 'Post updated! Yaaay!');
    }

    // Delete post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/')->with('message', ' Post deleted!');
    }
}