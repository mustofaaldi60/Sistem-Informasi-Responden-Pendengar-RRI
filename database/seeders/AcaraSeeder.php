<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Acara;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acara::create([
            'nama' => 'Pro 1',
            'slug' => 'pro-1',
            'frekuensi' => '97,6'
        ]);
    }
}
