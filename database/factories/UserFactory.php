<?php

namespace Database\Factories;

use App\Constants\RoleConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'login' => $this->faker->unique()->userName(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'role' => $this->faker->randomElement(RoleConstants::ROLES),
            'password' => bcrypt('password'),
        ];
    }
}
