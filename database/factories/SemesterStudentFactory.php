<?php

namespace Database\Factories;

use App\Models\SemesterStudent;
use App\Models\Student;
use App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

class SemesterStudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SemesterStudent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'student_id' => Student::query()->get()->random()->id,
            'semester_id' => Semester::query()->get()->random()->id,
            'mark' => rand(1,12),
        ];
    }
}
