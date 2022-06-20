<?php

namespace Database\Factories;

use App\Models\LinkType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $user = User::query()->inRandomOrder()->first();
        $linkType = LinkType::query()->inRandomOrder()->first();
        return [
            'name' => $this->faker->word(),
            'link' => $this->faker->word(),
            'link_type_id' => $linkType->id,
            'user_id' => $user->id,
        ];
    }
}
