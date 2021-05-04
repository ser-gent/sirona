<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'length' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.15, $max = 20.00),
            'width' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.15, $max = 20.00),
            'height' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.15, $max = 20.00),
            'weight' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.15, $max = 20.00),
            'stock' => $this->faker->numberBetween($min = 0, $max = 5400),
            'location' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
