<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

class CarFactory extends Factory
{
    protected $model = Car::class;
    // protected $engine = ['diesel', 'petrol', 'electric', 'hybrid'];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year(),
            'max_speed' => $this->faker->randomNumber(3, true),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->randomElement(['diesel', 'petrol', 'electric', 'hybrid']),
            'number_of_doors' => $this->faker->randomElement([2, 3, 4, 5])
        ];
    }
}
