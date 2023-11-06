<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        // Seed suppliers using the Supplier model factory
        Supplier::factory(50)->create(); // Assuming 50 suppliers to be created
    }
}
