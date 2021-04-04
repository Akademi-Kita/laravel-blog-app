<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = \App\Models\User::all('id');
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->sentences(3, true),
            'user_id' => $this->faker->randomElement($user_id),
        ];
    }
}
