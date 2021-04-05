<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->unique(false, 20000)->userName,
            'email' => $this->faker->unique(false, 20000)->email,
            'password' => 'tes12345',
            'address' => $this->faker->streetAddress,
            'birthdate' => $this->faker->date(),
            'birth_province' => $this->faker->city,
            'organization' => $this->faker->company,
            'email_verified_at' => null,
            'created_at' => now(),
            'updated_at' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
