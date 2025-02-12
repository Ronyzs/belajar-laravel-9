<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetailModel extends Model
{
    use HasFactory;

    public function student() {
        return $this->belongsTo(StudentModel::class);
    }
}
