<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interaksi;

class InteraksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interaksi::factory(50)->create();
    }
}