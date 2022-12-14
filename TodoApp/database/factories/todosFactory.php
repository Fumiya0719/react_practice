<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class todosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'todo_name' => $this->faker->text(10),
            'todo_stats' => 'W',
        ];
    }
}
