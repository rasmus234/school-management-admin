<?php

namespace Database\Factories;

use App\Models\Statement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Comment::class;
    public function definition(): array
    {
        return [
            'comment_text' => $this->faker->sentence,
            'statement_id' => Statement::factory(),
            'parent_id' => User::factory(),
        ];
    }
}
