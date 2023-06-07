<?php

namespace Database\Seeders;

use App\Models\LoungeTobacco;
use Illuminate\Database\Seeder;

class LoungeTobaccoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoungeTobacco::factory()
            ->count(15)
            ->create();
    }
}
