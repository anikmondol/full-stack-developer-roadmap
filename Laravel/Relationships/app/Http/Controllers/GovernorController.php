<?php

namespace App\Http\Controllers;

use App\Models\Governor;
use Illuminate\Http\Request;

class GovernorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $user = Governor::find(4);

        $users = Governor::get();

        foreach ($users as $key => $value) {
           echo $value->name . "<br>";
           echo $value->email . "<br>";
           echo "<hr>";
        }




        // if ($user) {
        //     $governors = $user->roles; // Lazy load relationship

        //     // return $governors;

        //     foreach ($governors as $key => $value) {
        //        echo $value->role_name;
        //     }


        // } else {
        //     return response()->json(['error' => 'User not found'], 404);
        // }



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
