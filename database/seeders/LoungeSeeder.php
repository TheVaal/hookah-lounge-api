<?php

namespace Database\Seeders;

use App\Models\Lounge;
use App\Models\LoungeTobacco;
use App\Models\LoungeMenu;
use Illuminate\Database\Seeder;

class LoungeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lounge::factory()
            ->count(15)
            ->hasTables(2)
            ->create();
    }
}
