<?php

namespace Database\Factories;

use App\Models\Checkin;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckinFactory extends Factory
{
    protected $model = Checkin::class;

    public function definition()
    {
        return [
            'item_id' => function () {
                return \App\Models\Item::factory()->create()->id;
            },
            'quantity' => $this->faker->numberBetween(1, 50),
            'created_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            // Add other checkin attributes as needed for your application
        ];
    }
}
