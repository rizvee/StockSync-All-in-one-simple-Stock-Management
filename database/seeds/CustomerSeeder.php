<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample customers
        Customer::create([
            'name' => 'Customer A',
            'email' => 'customerA@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, City A',
        ]);

        Customer::create([
            'name' => 'Customer B',
            'email' => 'customerB@example.com',
            'phone' => '987-654-3210',
            'address' => '456 Elm St, City B',
        ]);

        // You can add more customers as needed
    }
}
