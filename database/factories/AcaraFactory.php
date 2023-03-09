<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->randomElement(['Obrolan Komunitas', 'Serenada', 'Orolan Malam Ini', 'Halo Kaltim']),
            'jenis' => $this->faker->randomElement(['Request Lagu', 'Responden']),
            'siaran_id' => mt_rand(1, 3),
            'penyiar' => $this->faker->randomElement(['Aldi Mustofa', 'Viola Dwi Prastica W', 'Deuwi Satriya Irawan']),
            'hari' => $this->faker->date(),
            'jam' => $this->faker->time(),
        ];
    }
}
