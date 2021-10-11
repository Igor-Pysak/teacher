<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function semesters (){
        return $this->belongsToMany(Semester::class, 'semester_student', 'semester_id', 'student_id' )->withPivot('mark');
    }
}
