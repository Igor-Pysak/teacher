<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Semester;
use App\Models\SemesterStudent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Student::factory(30)->create();
        Semester::factory(8)->create();
        SemesterStudent::factory(30)->create();
    }
}
