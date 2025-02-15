<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::with('student')->get();
        // $contacts = Student::with('contact')
        //             ->where('gender', "F")
        //             ->get();


        // $contacts = Student::where('gender', 'F')
        //             ->withWhereHas('contact',function($query){
        //     $query->where('city', 'Delhi');
        // })->get();

        // $contacts = Student::where('gender', 'F')
        //     ->WhereHas('contact', function ($query) {
        //         $query->where('city', 'Delhi');
        //     })->get();

        return ($contacts);
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
