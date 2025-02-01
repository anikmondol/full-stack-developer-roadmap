<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Rules\Uppercase;
use Illuminate\Support\Validator;
use Closure;

class StudentController extends Controller
{

    public function addStudent(Request $request)
    {

        $validate = $request->validate([

            // 'name' => ['required', new uppercase],
            'name' => ['required', function (string $attribute, mixed $value, Closure $fail)
            {
                if (strtoupper($value) !== $value) {
                  $fail("The :attribute must be uppercase ");
                }
            }],
            'email' => 'required|email'

        ]);

        return $request;


    }
}
