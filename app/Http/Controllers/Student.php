<?php

namespace App\Http\Controllers;

use App\Models\ActivityModel;
use App\Models\StudentDetailModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class Student extends Controller
{

    public function index()
    {
        $data = StudentModel::paginate(10);

        return view('student-table', ['data' => $data]);
    }

    function filter()
    {
        $students = StudentModel::where('score', '>=', 60)->get();

        return view('student-table-filter', ['students' => $students]);
    }
    public function show($id)
    {
        $data = StudentModel::find($id)->studentDetail;

        return view('example', ['data' => $data]);
    }

    public function studentActivity($id)
    {
        $student = StudentModel::find($id);
        $activity = $student->activities;

        return view('student-activities', ['student' => $student, 'activity' => $activity]);
    }
}
