<?php

namespace Database\Factories;

use App\Models\Robot;
use Illuminate\Database\Eloquent\Factories\Factory;

class RobotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Robot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'robot_code' => $this->faker->unique()->randomDigitNotNull,
            'statut_code' => $this->faker->numberBetween($min = 0, $max = 4),
            'battery_level' => $this->faker->numberBetween($min = 0, $max = 100),
            'nb_km' => $this->faker->numberBetween($min = 0, $max = 1000),
        ];
    }
}
