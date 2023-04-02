<?php

namespace Database\Factories;

use App\Models\ClassModel;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Enrollment::class;
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'class_id' => ClassModel::factory(),
            'semester_id' => Semester::factory(),
        ];
    }
}
