<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function addStudent(UserRequest $request)
    {



        // return $request->all();
        // return $request->only(['name','age']);
        return $request->except(['name','age']);
    }
}
