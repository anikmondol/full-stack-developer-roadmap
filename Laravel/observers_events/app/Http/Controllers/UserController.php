<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Scopes\UserScope;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::withoutGlobalScopes()->get();


        // $users = User::withoutGlobalScopes(UserScope::class)->get();

        // $users = User::withoutGlobalScopes([UserScope::class])->get();


        // $users = User::with('post')
        //     ->where('status', 1)
        //     ->get();

        // $users = User::with('post')
        //     ->active()
        //     ->get();

        // $users = User::with('post')
        //     ->whereCity('Delhi')
        //     ->where('status', 1)
        //     ->get();

        // $users = User::with('post')
        // ->whereCity('Delhi')
        // ->active()
        // ->get();

        // $users = User::city(['Delhi'])
        // ->sort()
        // ->get();


        // $users = User::select('name','city')
        //         ->where('city', 'Delhi')
        //         ->get();

        // $users = User::where('city', 'Delhi')
        //         ->get(['name','city','email']);


        // $users = User::all('name','city','email')->toArray();

        // $users = User::all('name','city','email');


        // $users = User::where('city', 'Delhi')->pluck('name','city');

        // $users = User::find(1);
        // $users = User::find(1,['name']);

        // $users = User::findorfail(1,['name']);

        // $users = User::find(1)->email;

        // $users = User::where('city','Delhi')->first()->email;

        // $users = User::where('city','Delhi')->value('email');


        //  $users = Post::with('user')->get();

        // $users = Post::with('user:name as User name,email as User Email,id')->get(['title','description','user_id']);

        // $users = Post::with(['user' => function($query){
        //     $query->select('name','email','id');
        // }])->get(['title','description','user_id']);

        // $users = Post::select('title','description','user_id')->with(['user' => function($query){
        //     $query->select('name','email','id');
        // }])->get();

        $users = Post::select('title','description','user_id')->withWhereHas('user', function($query){
            $query->select('name','email','id')->where('city','Delhi');
        })->get();



        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

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
