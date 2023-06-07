<?php

namespace Database\Factories;
use App\Models\Order;
use App\Models\Mix;
use Illuminate\Database\Eloquent\Factories\Factory;

class MixFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'weight' => $this->faker->numberBetween(18,22)
        ];
    }
}
