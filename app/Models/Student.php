<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

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
        return $this->belongsToMany(Activity::class);
    }
}
