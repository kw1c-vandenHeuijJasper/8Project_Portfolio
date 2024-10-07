<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(1, 2), true),
            'content' => fake()->paragraph(),
            'status' => function () {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $status = 'Not Started';
                }
                if ($rand == 1) {
                    $status = 'Just Begun';
                }
                if ($rand == 2) {
                    $status = 'Halfway';
                }
                if ($rand == 3) {
                    $status = 'Over Halfway';
                }
                if ($rand == 4) {
                    $status = 'Almost Done';
                }
                if ($rand == 5) {
                    $status = 'Done';
                }
                return $status;
            },
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
