<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fruits = [
            'Apple',
            'Banana',
            'Orange',
            'Watermelon',
            'Mango',
            'Pineapple',
            'Pear',
            'Grapes',
            'Strawberry',
            'Lemon',
            'Peach',
            'Cherry',
            'Peach',
        ];

        return [
            'name' => $fruits[array_rand($fruits)],
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(100, 1000),
            'is_highlighted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
