<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'category_id' => 1,
            'description' => $this->faker->text(),
            'adult_price' => $this->faker->numberBetween(100, 1000),
            'child_price' => $this->faker->numberBetween(100, 1000),
            'image' => "#",

        ];
    }
}
