<?php

namespace Database\Seeders;

use App\Models\Hardness;
use Illuminate\Database\Seeder;

class HardnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hardness::factory()
            ->count(3)
            ->create();
    }
}
