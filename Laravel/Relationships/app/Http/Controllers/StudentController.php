<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('contact')->get();
        // $students = Student::with('contact')
        //             ->where('gender', "F")
        //             ->get();


        // $students = Student::where('gender', 'F')
        //             ->withWhereHas('contact',function($query){
        //     $query->where('city', 'Delhi');
        // })->get();

        // $students = Student::where('gender', 'F')
        //     ->WhereHas('contact', function ($query) {
        //         $query->where('city', 'Delhi');
        //     })->get();

        return ($students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::create([
            'name' => 'anik',
            'age' => 24,
            'gender' => "M"
        ]);

        $student->contact()->create([
            'email' => 'anik@gmail.com',
            'phone' => '01252262',
            'address' => '#121 Ja Mirpur',
            'city' => 'Dhaka'
        ]);
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
