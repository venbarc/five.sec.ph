<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create(10);

        return [
            'product_id' => $faker->unique()->randomNumber(),
            'product_name' => $faker->word(),
            'product_price' => $faker->randomFloat(2, 1, 1000), // Generates a random float between 1 and 1000 with 2 decimal places
            'product_quantity' => $faker->numberBetween(1, 100),
            'product_image' => $faker->imageUrl(50, 50, 'cats'), // Generates a URL to a fake cat image
        ];
    }
}
