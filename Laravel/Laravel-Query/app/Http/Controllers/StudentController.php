<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::with('city')->get();
        // $students = Student::find(2, ['name', 'age']);
        // $students = Student::where('email', 'shahid@gmail.com')->get();
        // $students = Student::count();
        // $students = Student::min('age');
        // $students = Student::max('age');
        // $students = Student::sum('age');
        //  $students = Student::where('city', '5')->get();
        // $students = Student::whereCity("5")
        //             ->whereAge(20)
        //             ->select('name','email as user_email')
        //             ->get();
        // $students = Student::whereCity("5")
        //             ->whereAge(20)
        //             ->select('name','email as user_email')
        //             ->toSql();
        // $students = Student::whereCity("5")
        // ->whereAge(20)
        // ->select('name','email as user_email')
        // ->toRawSql();
        // $students = Student::whereCity("5")
        // ->whereAge(20)
        // ->select('name','email as user_email')
        // ->dd();
        // $students = Student::whereCity("5")
        // ->whereAge(20)
        // ->select('name','email as user_email')
        // ->ddRawSql();
        // $students = Student::first();
        // $students = Student::where('age','=',19)->get();

        // return $students;


        // return view("welcome", compact('students'));


        $students = Student::select('students.*', 'cities.city_name')
        ->join('cities', 'students.city', '=', 'cities.id')
        ->get();

    return view('home', compact('students'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
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
        return view('viewuser');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('updateuser');
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
