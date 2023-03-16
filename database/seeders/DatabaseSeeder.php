<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{
    UserSeeder,
    LaguSeeder,
    RespondenSeeder,
    RequestLaguSeeder,
    SiaranSeeder,
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            SiaranSeeder::class,
            LaguSeeder::class,
            RequestLaguSeeder::class,
            RespondenSeeder::class,
            AcaraSeeder::class,
        ]);
    }
}
