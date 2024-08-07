<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    public function student()
    {
        return $this->hasMany(StudentModel::class, 'teacher_id');
    }
}
