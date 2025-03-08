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

        // $post = Post::with('image')->find(1);

                $post = Post::find(1);

        return $post->image;



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $post = Post::create([

            'title' => 'news title one',
            'description' => 'fist post description'

        ]);

        $post->image()->create([
            'url' => 'images/post/post-one.jpg'
        ]);


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
