<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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



    public function innerPage()
    {
        return view('innerPage');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }


    public function dashboardPage()
    {

        // Gate::authorize('isAdmin');

        // if (Gate::allows('isAdmin')) {
        //     return view('dashboardPage');
        // }else{
        //     return "Access Denied";
        // }

        return view('dashboardPage');
    }

    public function post(int $id)
    {

        $posts = Post::where('user_id',  $id)->get();

        return view('post', compact('posts'));
    }

    public function profile(int $id)
    {

        // if (Gate::allows('view-profile', $id)) {
        //     $user = User::findorfail($id);
        //     return view('profile', compact('user'));
        // } else {
        //     // return redirect()->route('dashboardPage');
        //     abort(403);
        // }

        Gate::authorize('view-profile', $id);

            $user = User::findorfail($id);
            return view('profile', compact('user'));

    }

    public function updatePost($id){

        $post = Post::findorfail($id);

        $targetUser = $post->user_id;

        Gate::authorize('post-update', $targetUser);



        return $post;

    }

}
