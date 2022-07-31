<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 5),
            'post_id' => random_int(1, 10),
            'text' => $this->faker->paragraph(1, true),
        ];
    }
}
