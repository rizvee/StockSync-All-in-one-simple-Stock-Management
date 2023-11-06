<?php

namespace Database\Factories;

use App\Models\Checkout;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    protected $model = Checkout::class;

    public function definition()
    {
        return [
            'item_id' => function () {
                return \App\Models\Item::factory()->create()->id;
            },
            'quantity' => $this->faker->numberBetween(1, 20),
            'created_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            // Add other checkout attributes as needed for your application
        ];
    }
}
