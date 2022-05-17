<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Список ' .$this->faker->randomNumber(2, false),
            'desk_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
