<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkout;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample checkouts
        Checkout::create([
            'item_id' => 1, // Reference to the associated item
            'quantity' => 3,
            'checkout_date' => now(),
            'notes' => 'Sold items to customer A.',
        ]);

        Checkout::create([
            'item_id' => 2, // Reference to the associated item
            'quantity' => 2,
            'checkout_date' => now(),
            'notes' => 'Fulfilled an order for customer B.',
        ]);

        // You can add more checkouts as needed
    }
}
