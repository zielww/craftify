<?php

namespace Database\Factories;

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
            'name' => ucfirst(fake()->words(rand(1,2), true)) . ' Tutorial',
            'description' => fake()->paragraphs(rand(1,3), true),
            'materials' => "Yarn (various colors), Crochet Hook (Size " . fake()->randomElement(['G', 'H', 'I']) . "), Scissors, Yarn Needle",
            'instructions' => fake()->paragraph(50, true),
            'image_url' => fake()->imageUrl(640, 480, 'crochet', true),
            'skill_level_required' => fake()->randomElement([ 'beginner', 'intermediate', 'advanced']),
            'time' => fake()->numberBetween(5, 50) . ' ' . fake()->randomElement(['minutes', 'hours'])
        ];
    }
}
