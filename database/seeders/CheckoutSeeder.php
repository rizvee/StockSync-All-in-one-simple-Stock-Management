<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkout;

class CheckoutSeeder extends Seeder
{
    public function run()
    {
        // Seed checkouts using the Checkout model factory
        Checkout::factory(100)->create(); // Assuming 100 checkouts to be created
    }
}
