<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake();
        $name=$this->faker->name();
        $name=$this->faker->sentence;

        return [
            'title' => $name,
            'slug' => str($name)->slug(),
            'content' => fake()->paragraph(30,false),     
            'description' => $this->faker->paragraph(3,true),   
            'posted' => $this->faker->randomElement(['yes','not']),
            'category_id' => $this->faker->randomElement([1, 5, 4, 6, 7, 20]), 
            'image' => $this->faker->imageUrl(),
            
          ];
    }
}
