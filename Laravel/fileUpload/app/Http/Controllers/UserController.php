<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $users = User::get();

        return view('file-upload', compact('users'));
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

        // $path = $request->file('photo')->store('image','public');

        // $path = $request->photo->store('image','public');


        // $fileName = $file->getClientOriginalName();


        // $fileName = time() . '-' .  $file->getClientOriginalName();

        // $path = $request->photo->storeAs('image', $fileName,'public');

        // $extension = $file->getClientOriginalExtension();

        // $extension = $file->extension();

        //  $extension = time() . '-' . $file->hashName();

        // $extension = $file->getClientMimeType();

        // $extension = $file->getSize();

        // dd($extension);

        $file = $request->file('photo');


        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:3000'
        ]);


        $path = $request->photo->store('image', 'public');



        User::create([
            'file_name' =>  $path,

        ]);




        return redirect()->route('user.index')->with('status', 'User Image Upload Successfully');
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

        $user = User::find($id);

        return view('file-update', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::find($id);


        if ($request->hasFile('photo')) {

            $image_path = public_path('storage/') . $user->file_name;


            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            $path = $request->photo->store('image', 'public');


            $user->file_name = $path;

            $user->save();

            return redirect()->route('user.index')->with('status', 'User Image update Successfully');

        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);

        $users->delete();

        $image_path = public_path('storage/') . $users->file_name;


        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        return redirect()->route('user.index')->with('status', 'User Image Delete Successfully');
    }
}
