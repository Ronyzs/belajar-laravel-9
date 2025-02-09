<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivityController extends Controller
{
    public function show($id)
    {
        $activity = Activity::find($id);
        $students = $activity->students;

        return view('activity', ['activity' => $activity, 'students' => $students]);
    }
}
