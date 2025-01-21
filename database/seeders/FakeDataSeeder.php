<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generates fake usable data!
        Client::factory(5)
            ->has(
                Project::factory(5)
                    ->has(Task::factory(5))
            )->create();

        // Run factory with every project having a 50% chance of having a random client
        Project::factory(25)
            ->has(Task::factory(5))
            ->create();
    }
}
