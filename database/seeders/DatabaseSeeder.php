<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ItemSeeder::class,
            CheckinSeeder::class,
            CheckoutSeeder::class,
            CustomerSeeder::class,
            SupplierSeeder::class,
            UserSeeder::class,
            // Add calls to other seeder classes if needed
        ]);
    }
}
