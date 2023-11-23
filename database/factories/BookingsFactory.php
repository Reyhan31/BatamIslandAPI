<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class BookingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $id = 1;

        return [
            //
            'custom_id' => 'invoice_' . $id++,
            'status' => $this->faker->randomElement(['paid', 'expired']), // Randomly choose between 'paid' or 'expired'
            'date' => $this->faker->date(),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phoneNumber' => $this->faker->phoneNumber,
            'packageName' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'isDeleted' => $this->faker->boolean,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
