<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomElement($array = array (5,15,12,8,10)),
            'tax' => $this->faker->randomElement($array = array (123.45,46.65,39.73,39.73,250.00,59.35)),
            'stock' => 1
        ];
    }
}
