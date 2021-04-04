<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arr = array_merge(\App\Models\Post::all('id')->toArray());
        $arr2 = array(\App\Models\User::class, \App\Models\Post::class);
        return [
            'photo' => 'photossssss',
            'imageable_id' => $this->faker->randomElement(array(1,2,3,4,5)),
            'imageable_type' => $this->faker->randomElement($arr2),
        ];
    }
}
