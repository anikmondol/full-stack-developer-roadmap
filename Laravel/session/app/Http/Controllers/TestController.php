<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    {

        // $value = session()->all();
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";

        // $value = session()->except(['name', '_previous']);
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";


        // $value = session()->only(['name', 'class']);
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";

        // $value = session()->get('name');
        // $value = session('name');
        // echo $value;


        // $value = session('name', "hello");
        // echo $value;


        // if (session()->has('name')) {
        //     $value = session('name');
        //     echo $value;
        // } else {
        //     echo "Name key doesn't Exists";
        // }

        // if (session()->exists('name')) {
        //     $value = session('name');
        //     echo $value;
        // } else {
        //     echo "Name key doesn't Exists";
        // }


        $value = session('name');

        return view('welcome', compact('value'));


    }


    public function storeSession(Request $request)
    {

        session([
            'name' => "YahooBaba",
            "class" => "Btech"
        ]);


        // session()->increment('count', $incrementBy = 2);

        // session()->decrement('count', $incrementBy = 2);

        // session()->regenerate();


        session()->flash('status', 'session saved successfully');

        return redirect('/');
    }


    public function deleteSession()
    {

        // session()->forget(['name', 'class']);

        // session()->flush();

        session()->invalidate();

        return redirect('/');
    }
}
