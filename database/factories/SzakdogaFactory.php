<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Szakdoga>
 */
class SzakdogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'szakdoga_nev'=>fake()->sentence(2),
            'githublink'=>fake()->url(),
            'oldallink'=>fake()->url(),
            'tagokneve'=>fake('hu_HU')->name(),
        ];
    }
}
