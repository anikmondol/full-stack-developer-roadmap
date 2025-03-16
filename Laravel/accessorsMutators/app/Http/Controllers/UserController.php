<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();

        return view('welcome', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'user_name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'salary' => 'required',
        'dob' => 'required',
        'password' => 'required',
    ]);

    // Hash the password before storing
    // $validatedData['password'] = Hash::make($validatedData['password']);

    // Create the user
    User::create($validatedData);

    // Redirect properly
    return redirect()->route('user.index')->with('success', 'User created successfully!');
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
        // Find the user by ID
        $user = User::find($id);

        // Check if user exists
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        // Delete the user
        $user->delete();

        // Redirect with success message
        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }
}
