<?php

namespace Database\Factories;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['Ceasar', 'Jack Daniels', 'Bud Light', 'Nuggets']);
        return [
            //
            'name' => $name
        ];
    }
}
