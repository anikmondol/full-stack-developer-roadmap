<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{



    public function storeData(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'age' => 'required',
            'role' => 'required|string',  
            'confirm_password' => 'required|same:password'
        ]);

        // Store user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'role' => $request->role ?? 'user',  // Default to 'user' if role is not provided
            'password' => Hash::make($request->password)
        ]);


        return redirect()->route('login')->with('success', 'User registered successfully!');
    }

    public function loginMatch(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboardPage');
        } else {
            return redirect()->route('login');
        }
    }

    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboardPage');
        } else {
            return redirect()->route('login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function innerPage()
    {
        if (Auth::check()) {
            return view('innerPage');
        } else {
            return redirect()->route('login');
        }
    }
}
