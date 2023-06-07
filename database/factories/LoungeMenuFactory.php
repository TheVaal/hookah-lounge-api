<?php

namespace Database\Factories;

use App\Models\LoungeMenu;
use App\Models\Lounge;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoungeMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'menu_id' => $this->faker->numberBetween(1,10),
            'lounge_id' => $this->faker->numberBetween(1,15),
            'price' => $this->faker->numberBetween(100,1000)
        ];
    }
}
