<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $post = Post::with('tags')->find(1);

        return $post;



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $post = Post::create([
            'title' => "new title five",
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]);


        // $post->tags()->create([
        //     "tag_name" => "sachin tendulkar"
        // ]);

        $post = Post::find(3);

        $post->tags()->attach([2, 6]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
