<?php

namespace Database\Factories;

use App\Models\Hookah;
use App\Models\Mix;
use App\Models\LoungeTobacco;
use Illuminate\Database\Eloquent\Factories\Factory;

class HookahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mix_id' => Mix::factory(),
            'weight'=> $this->faker->numberBetween(10,10),
            'lounge_tobacco_id' => LoungeTobacco::factory()
        ];
    }
}
