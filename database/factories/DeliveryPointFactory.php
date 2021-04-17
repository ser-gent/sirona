<?php

namespace Database\Factories;

use App\Models\DeliveryPoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryPointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryPoint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'longitude'=> $this->faker->longitude($min = -180, $max = 180),
            'latitude'=> $this->faker->latitude($min = -180, $max = 180),
            'floor' => $this->faker->numberBetween($min = -2, $max = 8),
            'have_charging_station' => $this->faker->boolean,
        ];
    }
}
