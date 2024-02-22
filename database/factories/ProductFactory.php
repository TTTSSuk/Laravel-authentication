<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        return [
            'id_prod' => $this->faker->unique()->regexify('[0-9]{15}'),
            'name_prod' => $this->faker->name,
            'detail_prod' => $this->faker->sentence,
            'price' => (double)$this->faker->randomFloat(2, 10, 100),
            'stock_prod' => $this->faker->numberBetween(0, 100),
        ];
    }
}
