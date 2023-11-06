<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkin;

class CheckinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample check-ins
        Checkin::create([
            'item_id' => 1, // Reference to the associated item
            'quantity' => 10,
            'checkin_date' => now(),
            'notes' => 'Received new stock.',
        ]);

        Checkin::create([
            'item_id' => 2, // Reference to the associated item
            'quantity' => 5,
            'checkin_date' => now(),
            'notes' => 'Restocked inventory.',
        ]);

        // You can add more check-ins as needed
    }
}
