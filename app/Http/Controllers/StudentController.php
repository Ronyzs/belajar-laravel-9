<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();
        $data = Student::paginate(10);

        return view('student-table', ['data' => $data, 'user' => $user, 'id' => $id]);
    }

    function filter()
    {
        $students = Student::where('score', '>=', 60)->get();

        return view('student-table-filter', ['students' => $students]);
    }
    public function show($id)
    {
        $data = Student::find($id)->studentDetail;

        return view('example', ['data' => $data]);
    }

    public function studentActivity($id)
    {
        $student = Student::find($id);
        $activity = $student->activities;

        return view('student-activities', ['student' => $student, 'activity' => $activity]);
    }
}
