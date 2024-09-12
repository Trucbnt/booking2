<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" =>  $this->faker->sentence(), 
            "price" => $this->faker->numberBetween(1000 , 100000),
            "image" => $this->faker->imageUrl(),
            "category_id" => 1
        ];
    }
}
