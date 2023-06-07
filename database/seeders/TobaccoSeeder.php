<?php

namespace Database\Seeders;

use App\Models\Tobacco;
use Illuminate\Database\Seeder;

class TobaccoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tobacco::factory()
            ->count(10)
            ->create();
    }
}
