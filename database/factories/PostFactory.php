<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Code to create dummy data
        // php artisan tinker
        // App\Models\Post::factory()->sequence(['user_id'=>1], ['user_id'=>2])->count(400)->create();
        return [
            'body' => $this->faker->sentence(20)
        ];
    }
}
