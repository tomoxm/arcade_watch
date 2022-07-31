<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->words(4, true);
        $slug = Str::slug($title);

        return [
            'user_id' => 1,
            'title' => ucfirst($title),
            'slug' => $slug,
            'text' => $this->faker->paragraphs(5, true),
        ];
    }
}
