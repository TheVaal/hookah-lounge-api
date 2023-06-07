<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class HardnessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->name();
        return [
            'name' => $this->faker->unique()->randomElement(['H', 'M', 'L'])
        ];
    }
}
