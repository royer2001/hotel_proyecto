<?php

namespace Database\Factories;

use App\Models\product;
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

    protected $model = product::class;

    public function definition(): array
    {
        
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'category_id' => function () {
                return \App\Models\category::inRandomOrder()->first()->id;
            },
        ];
    }
}
