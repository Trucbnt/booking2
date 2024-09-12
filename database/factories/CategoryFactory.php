<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->word()
        ];
    }
    public function configure(){
        return $this->afterCreating(function(Category $category){
            $category->foods()->createMany(Food::factory()->count(5)->make()->toArray());
        });
    }
}
