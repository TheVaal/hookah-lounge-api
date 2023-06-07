<?php

namespace Database\Factories;

use App\Models\LoungeTobacco;
use App\Models\Lounge;
use App\Models\Tobacco;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoungeTobaccoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tobacco_id' => $this->faker->numberBetween(1,10),
            'lounge_id' => $this->faker->numberBetween(1,15),
            'price' => $this->faker->numberBetween(15,25)
        ];
    }
}
