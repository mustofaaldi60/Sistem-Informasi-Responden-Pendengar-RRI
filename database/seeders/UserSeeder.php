<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // buat test login aja
        User::create([
            'name' => 'aldi',
            'email' => 'mustofaaldi60@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('aldi123'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
