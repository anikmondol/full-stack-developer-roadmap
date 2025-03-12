<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $test = Test::find(3);

        // return $test->meta_data['address']['city'];

        // $test = Test::orderBy('meta_data->name')->get();

        // $test = Test::where('meta_data->name', "Anik Mondal")->get();

        // $test = Test::where('meta_data->name', "LIKE", "ya%")->get();

        // $test = Test::whereJsonContains('meta_data->name', "Anik Mondal")->get();

        // $test = Test::whereJsonLength('meta_data->name', 1)->get();

        // return $test;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        // $test = new Test;

        // $test->meta_data = [
        //     'name' => "Yahoo Baba",
        //     'email' => 'yahoobaba@gmail.com',
        //     'mobile_number' => '11223344'
        // ];

        // $test->save();

        // $test = Test::create([
        //     'meta_data' => [
        //         'name' => 'Katrina Kaif',
        //         'email' => 'katrinakaif@gmail.com',
        //         'mobile_number' => '33445566',
        //         'address' => [
        //             'street' => '#123 KK Road',
        //             'city' => 'Mumbai',
        //             'country' => 'India'
        //         ],
        //     ]
        // ]);


        // $test = Test::where('id', 3)->update([
        //     'meta_data->address->city' => 'Dhaka'
        // ]);

        // $test = Test::find(2);

        // $test->meta_data['email'] = 'shahidkapoor@gmail.com';

        // $test->save();


        // $test = Test::find(2);

        // $test->meta_data = collect($test->meta_date)->forget('email');

        // $test->save();



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
