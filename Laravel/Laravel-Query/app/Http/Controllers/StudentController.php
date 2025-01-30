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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
            'age' => 'required|integer|min:18|max:30',
            'city' => 'required|string'
        ], [
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

        return $request;
    }


}
