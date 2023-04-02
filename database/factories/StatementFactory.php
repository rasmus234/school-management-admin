<?php

namespace Database\Factories;

use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statement>
 */
class StatementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Statement::class;
    public function definition(): array
    {
        return [
            'statement_text' => $this->faker->sentence,
            'teacher_id' => User::factory(),
            'enrollment_id' => Enrollment::factory(),
        ];
    }
}
