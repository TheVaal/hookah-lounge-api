<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Table;
use App\Models\Lounge;
use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['O', 'B', 'P', 'C']);
        $closed = $status == 'P' or $status == 'C';
        return [
            'lounge_id' => Lounge::factory(),
            'table_id' => Table::factory(),
            'session_id' => Session::factory(),
            'sum' => $this->faker->numberBetween(300,1000),
            'status' => $status, //O - Open, B - Billed, P - Paid, C - Canceled
            'closed' => $closed, 
        ];
    }
}
