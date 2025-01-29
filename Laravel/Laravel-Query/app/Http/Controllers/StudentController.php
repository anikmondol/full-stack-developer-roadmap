<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudent()
    {

        $students = DB::table('students')->get();

        // $students = DB::table('students')->where('id', 2)->get();
        // $students = DB::table('students')->find(4);


        // foreach ($students as $key => $value) {
        //     echo $value->name ." || ".$value->age ."||". $value->email ." || ".$value->city. "<br>";
        // }

        return view('allstudents', ['students' => $students]);
    }


    public function singleStudent(string $id)
    {

        // $students = DB::table('students')->get();
        $student = DB::table('students')->find($id);

        return view('singleStudent', ['student' => $student]);
    }


    public function addStudent(Request $request)
    {

        // $user = DB::table('students')->insert([
        //     [
        //         'name' => 'Anik mondal',
        //         'email' => 'anikmondal558363@gmail.com',
        //         'age' => 24,
        //         'city' => 'Dhaka',
        //     ]
        // ]);


        // $user = DB::table('students')->insertOrIgnore([
        //     [
        //         'name' => 'anik mondal',
        //         'email' => 'anikmondal558363@gmail.com',
        //         'age' => 24,
        //         'city' => 'Dhaka',
        //     ]
        // ]);

        // $user = DB::table('students')->upsert( [
        //     'name' => 'ok mondal',
        //     'email' => 'ok@gmail.com',
        //     'age' => 25,
        //     'city' => 'Dhaka',
        // ],
        // ['email']);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'age' => 'required|integer|min:1|max:120',
            'city' => 'required|string|max:255',
        ]);


        $user = DB::table('students')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'city' => $request->city,
            ]
        );

        return redirect()->route('allStudents')->with('success', 'Student added successfully!');


        // return $user;

        // if ($user) {
        //    return "<h2>Data insert successfully</h2>";
        // } else {
        //    return "<h2>No Data insert</h2>";
        // }


    }


    public function updateStudent()
    {
        $user = DB::table('students')
            ->where('id', 2)
            ->increment('age', 1, ['city' => 'dhaka']);
        if ($user) {
            return "<h2>Data Update successfully</h2>";
        } else {
            return "<h2>No Data Update</h2>";
        }
    }

    public function deleteStudent(string $id)
    {
        $user = DB::table('students')
            ->where('id', $id)
            ->delete();

        // $students = DB::table('students')->get();

        // return view('allStudents', ['students' => $students]);

        if ($user) {
            return redirect()->route('allStudents');
        }
    }

    public function edit(string $id)
    {
        $user = DB::table('students')->find($id);

        return view('edit_single', ['user' => $user]);


    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|unique:students,email,'.$id,
        'age' => 'required|integer|min:1|max:120',
        'city' => 'required|string|max:255',
    ]);

    // আপডেট করুন
    DB::table('students')->where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
        'city' => $request->city,
    ]);

    return redirect()->route('allStudents')->with('success', 'Student updated successfully!');
}


}
