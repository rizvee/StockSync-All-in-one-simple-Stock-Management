<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample suppliers
        Supplier::create([
            'name' => 'Supplier A',
            'email' => 'supplierA@example.com',
            'phone' => '111-222-3333',
            'address' => '789 Market St, City X',
        ]);

        Supplier::create([
            'name' => 'Supplier B',
            'email' => 'supplierB@example.com',
            'phone' => '444-555-6666',
            'address' => '123 Trade St, City Y',
        ]);

        // You can add more suppliers as needed
    }
}
