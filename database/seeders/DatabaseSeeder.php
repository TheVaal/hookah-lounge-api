<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ManufacturerSeeder::class,
            HardnessSeeder::class,
            TobaccoSeeder::class,
            MenuSeeder::class,
            LoungeSeeder::class,
            TableSeeder::class,
            LoungeTobaccoSeeder::class,
            LoungeMenuSeeder::class,
            SessionSeeder::class,
            OrderSeeder::class,
            InOrderSeeder::class,
            MixSeeder::class,
            HookahSeeder::class,    
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
