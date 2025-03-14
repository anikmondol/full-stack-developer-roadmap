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

        $users = User::withoutGlobalScopes([UserScope::class])->get();


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
