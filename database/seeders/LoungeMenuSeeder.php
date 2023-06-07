<?php

namespace Database\Seeders;

use App\Models\LoungeMenu;
use Illuminate\Database\Seeder;

class LoungeMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoungeMenu::factory()
            ->count(15)
            ->create();
    }
}
