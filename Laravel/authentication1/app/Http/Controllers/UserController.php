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
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:0|max:120',
            'role' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',

        ]);


        // dd($request->role);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'age' => $request->age,
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
        // if (Auth::check()) {
        //     return view('dashboardPage');
        // } else {
        //     return redirect()->route('login');
        // }

        return view('dashboardPage');
    }

    public function innerPage()
    {
        // if (Auth::check()) {
        //     return view('innerPage');
        // } else {
        //     return redirect()->route('login');
        // }
        return view('innerPage');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
