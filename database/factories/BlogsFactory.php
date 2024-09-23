<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogsFactory extends Factory
{
    protected $model = \App\Models\Blogs::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'content' => $this->faker->paragraph(4, true),
            'status' => $this->faker->numberBetween(1, 3),
        ];
    }
}
