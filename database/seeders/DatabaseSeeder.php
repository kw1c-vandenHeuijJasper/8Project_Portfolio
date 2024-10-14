<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Project;
use App\Models\Quality;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'test user',
            'email' => 'test@test.test',
            'password' => 'test',
        ]);
        User::factory(1)->create([
            'name' => 'Jasper',
            'email' => 'jasper@test.com',
            'password' => 'Jasper',
        ]);


        Quality::factory(1)->create([
            'name' => 'HTML',
            'percentage' => 90,
        ]);
        Quality::factory(1)->create([
            'name' => 'CSS',
            'percentage' => 80,
        ]);
        Quality::factory(1)->create([
            'name' => 'TailwindCSS',
            'percentage' => 85,
        ]);
        Quality::factory(1)->create([
            'name' => 'JS',
            'percentage' => 20,
        ]);
        Quality::factory(1)->create([
            'name' => 'PHP',
            'percentage' => 80,
        ]);
        Quality::factory(1)->create([
            'name' => 'SQL',
            'percentage' => 60,
        ]);
        Quality::factory(1)->create([
            'name' => 'Laravel',
            'percentage' => 80,
        ]);
        Quality::factory(1)->create([
            'name' => 'Filament',
            'percentage' => 70,
        ]);

        Client::factory(1)->create([
            'name' => 'Jasper van den Heuij',
            'description' => 'Maker van de website',
        ]);



        // Run factory with every project having a client
        Client::factory(5) // 5 clients //5
            ->has(
                Project::factory(5) // 25 projects //5
                    ->has(Task::factory(5)) // 125 tasks //5
            )->create();

        // Run factory with every project having a 50% chance of having a random client
        Project::factory(25) // 25 projects //25
            ->has(Task::factory(5)) // 125 tasks //5
            ->create();
    }
}
