<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $post_id = \App\Models\Post::all('id');
        return [
            'body' => $this->faker->sentence('10'),
            'post_id' => $this->faker->randomElement($post_id),
        ];
    }
}
