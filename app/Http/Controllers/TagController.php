<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get All data from Tags table.
        $data = Tag::all();
        // pass data to view.
        return view('tag.index', ['tags' => $data], ['pageTitle' => 'Tags']);
    }

    function create()
    {
        Tag::create([
            'title' => 'css',
        ]);
        return redirect('/tags');
    }

    function testManyTomany()
    {
        $post6 = Post::find(6);
        $post7 = Post::find(7);

        // $post6->tags()->attach([1, 2]);
        $post7->tags()->attach([2]);

        return response()->json([
            'post6' => $post6->tags,
            'post7' => $post7->tags
        ]);
    }
}
