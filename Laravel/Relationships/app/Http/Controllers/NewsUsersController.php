<?php

namespace App\Http\Controllers;

use App\Models\NewsUsers;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $users = NewsUsers::get();
        // $users = NewsUsers::with('post')->get();
        // $users = NewsUsers::with('post')->find(2);

        // $users = NewsUsers::find(2);
        // $posts = $users->post;

        // $users = NewsUsers::doesntHave('post')->get();

        // $users = NewsUsers::has('post')->with('post')->get();

        // $users = NewsUsers::has('post', ">=", 3)->with('post')->get();

        // $users = NewsUsers::withCount('post')->get();


        $users = NewsUsers::select(['id', 'name'])->withCount('post')->get();


        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // // Create a new Post instance
        // $post = new Post([
        //     'title' => "test title",
        //     'description' => "test description",
        // ]);

        // // Find the NewsUser by ID (for example, ID 2)
        // $user = NewsUsers::find(2);

        // if ($user) {
        //     // Save the new post associated with the user
        //     $user->posts()->save($post);  // Use 'posts()' (plural)
        // } else {
        //     // Handle case when the user doesn't exist
        //     return response()->json(['message' => 'User not found'], 404);
        // }


      // Find the user with ID 2
$user = NewsUsers::find(2);

if ($user) {
    // Create a new post and associate it with the user
    $user->posts()->create([ // Use 'posts()' (plural)
        'title' => "anik N title",
        'description' => "anik description",
    ]);
} else {
    // Handle case when the user is not found
    return response()->json(['message' => 'User not found'], 404);
}







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
    public function show(NewsUsers $newsUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsUsers $newsUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsUsers $newsUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsUsers $newsUsers)
    {
        //
    }
}
