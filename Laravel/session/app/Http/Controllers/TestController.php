<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    {

        $value = session()->all();
        echo "<pre>";
        print_r($value);
        echo "</pre>";

        // $value = session()->get('name');
        // $value = session('name');


        // echo $value;
    }


    public function storeSession(Request $request) {

        session([
            'name' => 'YahooBaba',
            "class" => "Btech"
        ]);


        return redirect('/');

    }


    public function deleteSession() {

        // session()->forget(['name', 'class']);

        session()->flush();

        return redirect('/');
    }
}
