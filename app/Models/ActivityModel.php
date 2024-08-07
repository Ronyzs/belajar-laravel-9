<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public function student()
    {
        return $this->belongsToMany(StudentModel::class, 'activity_student', 'activity_id', 'student_id');
    }
}
