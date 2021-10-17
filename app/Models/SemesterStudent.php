<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemesterStudent extends Model
{
    use HasFactory;
    protected $table = 'semester_student';
    protected $guarded = [];
    public $timestamps = false;
}
