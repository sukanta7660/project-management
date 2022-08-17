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
    public function definition()
    {
        $type = config('site.project.type');
        $key = array_rand($type);

        return [
            'name' => $this->faker->company(),
            'type' => $type[$key],
            'description' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
