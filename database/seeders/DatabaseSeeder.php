<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        Project::factory(30)->create();

        $user = User::factory()->create();
        $project = Project::factory()->create();
        $user->projects()->attach($project->id, ['status' => fake()->randomElement(['interested', 'in_progress', 'completed'])]);
    }
}
