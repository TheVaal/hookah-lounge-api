<?php

namespace Database\Factories;

use App\Models\Lounge;
use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'accessCode' => $this->faker->randomElement(['Heavy', 'Medium', 'Light']),
            'owner_id' => $this->faker->numberBetween(1,22),
            'lounge_id' => Lounge::factory(),
            'status' => $this->faker->randomElement(['BD', 'PO', 'PD']),// BD - Booked, PO - preordered, CN - Canceled, PD - Paid
            'booking_date' => $this->faker->dateTimeThisDecade() 
        ];
    }
}
