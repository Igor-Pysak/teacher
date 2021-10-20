<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $table="semester_student";
    protected $guarded = [];
    protected $appends = ['student'];
    public $timestamps = false;

    public function semester(){
        return $this->belongsTo(Semester::class,'semester_id','id');
    }

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
