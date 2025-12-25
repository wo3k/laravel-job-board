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
        $data = Tag::paginate(5);
        // pass data to view.
        return view('tag.index', ['tags' => $data, 'pageTitle' => 'Tags']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ['pageTitle' => 'Blog - Create New Tag']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.show', ['tag' => $tag], ['pageTitle' => $tag->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('tag.edit', ['tag' => $tag, 'pageTitle' => 'Tags - Edit Tag']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
