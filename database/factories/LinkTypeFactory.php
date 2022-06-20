<?php

namespace Database\Factories;

use App\Models\Icon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class LinkTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $icon = Icon::query()->inRandomOrder()->first();
        return [
            'name' => $this->faker->unique()->word(),
            'icon_id' => $icon->id,
            'domain' => $this->faker->unique()->domainName(),
        ];
    }
}
