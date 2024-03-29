<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->paragraph(),
            'image' => $this->faker->word(),
            'publisher_id' => mt_rand(1,5)
        ];
    }
}
