<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestLaguFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5, true),
            'genre' => $this->faker->sentence(2, true),
            'album' => $this->faker->sentence(1, true),
        ];
    }
}
