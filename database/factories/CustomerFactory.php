<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement([
            Customer::TYPE_INDIVIDUAL,
            Customer::TYPE_BUSINESS,
        ]);

        $name = $type === Customer::TYPE_INDIVIDUAL
            ? $this->faker->name()
            : $this->faker->company();

        $email = $type === Customer::TYPE_INDIVIDUAL
            ? $this->faker->email()
            : $this->faker->companyEmail();

        return [
            'name' => $name,
            'type' => $type,
            'email' => $email,
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'postal_code' => $this->faker->postcode(),
        ];
    }
}
