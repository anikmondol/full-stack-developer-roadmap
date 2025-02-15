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
         // Use 'user' (singular) as each post belongs to one user
        //  $posts = Post::with('user')->get();
                // $posts = Post::with('user')->find(2);

        //  return $posts->user->name;


        // $posts = Post::with('user')
        //             ->where('title', 'News Title Two')
        //             ->get();

        $posts = Post::withWhereHas('user', function($query){
                            $query->where('name', 'Salman Khan')
                            ->orWhere('name', 'Yahoo Baba');
                        })
                    ->get();



        return $posts;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
