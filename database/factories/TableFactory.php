<?php

namespace Database\Factories;
use App\Models\Table;
use App\Models\Lounge;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Table 1', 'Table 2', 'Table 3']),
            'lounge_id' => Lounge::factory(),
            'seats' => $this->faker->numberBetween(1,6),
        ];
    }
}
