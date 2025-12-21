<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Database\Factories\CommentFactory;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get All data from comment table.
        $data = Comment::paginate(5);
        // pass data to view.
        return view('comment.index', ['comments' => $data], ['pageTitle' => 'Comments']);
    }

    function create()
    {
        // Comment::create([
        //     'author' => 'Belal',
        //     'content' => 'This is a test comment',
        //     'post_id' => 9,
        // ]);

        Comment::factory(10)->create();
        return redirect('/comments');
    }
}
