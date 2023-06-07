<?php

namespace Database\Factories;
use App\Models\Hardness;
use App\Models\Manufacturer;
use App\Models\Tobacco;
use Illuminate\Database\Eloquent\Factories\Factory;

class TobaccoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufacturer_id' =>  $this->faker -> numberBetween(1,4),
            'hardness_id' => $this->faker -> numberBetween(1,3),
            'taste' => $this->faker -> randomElement(['cherry', 'cola', 'mint', 'strawberry', 'lime', 'coconut'])
        ];
    }
}
