<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create([
            'name' => 'test user',
            'email' => 'test@test.test',
            'password' => 'test',
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Jasper',
            'email' => 'jasper@test.com',
            'password' => 'Jasper',
        ]);
        // Run factory with every project having a client
        \App\Models\Client::factory(5) // 5 clients
            ->has(
                \App\Models\Project::factory(5) // 25 projects
                    ->has(\App\Models\Task::factory(5)) // 125 tasks
            )->create();

        // Run factory with every project having a 50% chance of having a random client
        \App\Models\Project::factory(25) // 25 projects
            ->has(\App\Models\Task::factory(5)) // 125 tasks
            ->create();
    }
}
