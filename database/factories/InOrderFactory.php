<?php

namespace Database\Factories;
use App\Models\InOrder;
use App\Models\LoungeMenu;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class InOrderFactory extends Factory
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
            'lounge_menu_id' => LoungeMenu::factory(),
            'quantity' => $this->faker->numberBetween(1,3),
            'guest_number' => $this->faker->numberBetween(1,2)
            
        ];
    }
}
