<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function studentDetail()
    {
        return $this->hasOne(StudentDetailModel::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(TeacherModel::class);
    }

    public function activities()
    {
        return $this->belongsToMany(ActivityModel::class, 'activity_student', 'student_id', 'activity_id');
    }
}
