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
        ];

        $fruit = $fruits[array_rand($fruits)];

        return [
            'name' => $fruit,
            'description' => $this->faker->text(),
            'featured_image' => "https://source.unsplash.com/random/800×600/?$fruit",
            'price' => $this->faker->numberBetween(100, 1000),
            'is_highlighted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
