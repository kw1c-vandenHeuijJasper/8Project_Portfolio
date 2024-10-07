<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'type' => rand(0, 1),
            'start_date' => fake()->dateTimeBetween('-2 years', '-1 year'),
            'end_date' => function ($attributes) {
                return fake()->dateTimeBetween(Carbon::parse($attributes['start_date']));
            },
            'client_id' => function () {
                if ((bool)rand(0, 1)) {
                    return null;
                }
                return \App\Models\Client::get()->random()->id;
            },
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
