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


        \App\Models\Quality::factory(1)->create([
            'name' => 'HTML',
            'percentage' => '90',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'CSS',
            'percentage' => '80',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'JS',
            'percentage' => '20',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'PHP',
            'percentage' => '80',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'SQL',
            'percentage' => '80',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'Laravel',
            'percentage' => '70',
        ]);
        \App\Models\Quality::factory(1)->create([
            'name' => 'Filament',
            'percentage' => '70',
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
