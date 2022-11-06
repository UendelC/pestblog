<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Wink\WinkAuthor;

class AuthorFactory extends Factory
{
    protected $model = WinkAuthor::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'bio' => $this->faker->paragraph(),
        ];
    }
}
