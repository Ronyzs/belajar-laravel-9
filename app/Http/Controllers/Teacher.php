<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use Illuminate\Http\Request;

class Teacher extends Controller
{
    public function index($id)
    {
        $data = TeacherModel::find($id)->student;

        return view('teacher', ['data' => $data]);
    }
}
