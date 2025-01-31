<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function addStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:8',
            'age' => 'required|numeric|min:21',
            'country' => 'required',
        ], [
            'name.required' => 'User Name is required!',
            'email.required' => 'User Email is required!',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required!',
            'password.alpha_num' => 'Password must contain letters and numbers only.',
            'password.min' => 'Password must be at least 8 characters long.',
            'age.required' => 'Age is required!',
            'age.numeric' => 'Age must be a number.',
            'age.min' => 'You must be at least 21 years old.',
            'country.required' => 'Country selection is required.',
        ]);


        return $request;
    }


}
