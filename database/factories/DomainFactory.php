<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domain>
 */
class DomainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->domainName(),
            'verification_key' => $this->faker->word(),
            'cloudflare_id' => $this->faker->word(),
            'domain_id' => $this->faker->randomNumber(),
            'registered_at' => $this->faker->dateTime(),
        ];
    }
}
