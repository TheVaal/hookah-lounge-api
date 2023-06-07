<?php

namespace Database\Factories;

use App\Models\Lounge;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoungeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postCode(),
            'country' => $this->faker->country(),
        ];
    }
}
