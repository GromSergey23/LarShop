<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.

     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'price' => $this->faker->randomFloat(0,200,10000),
            'name' => $this->faker->word(),
            'description' => $this->faker->text(40),
            'count' => $this->faker->randomDigit(),
            'image'=> $this->faker->imageUrl(100,100, 'cats'),
            //
        ];
    }
}
