<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get All data from posts table.
        $data = Post::paginate(5);
        // pass data to view.
        return view('post.index', ['posts' => $data], ['pageTitle' => 'Blog']);
    }
    function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post], ['pageTitle' => $post->title]);
    }
    function create()
    {
        // $post = Post::create([
        //     'title' => 'New Post',
        //     'body' => 'This is my specail post',
        //     'author' => 'Belal',
        //     'published' => true
        // ]);
        Post::factory(20)->create();
        return redirect('/blog');
    }

    function delete()
    {
        Post::destroy(11);
        return redirect('/blog');
    }
}
