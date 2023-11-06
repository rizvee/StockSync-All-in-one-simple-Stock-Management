<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // Seed customers using the Customer model factory
        Customer::factory(50)->create(); // Assuming 50 customers to be created
    }
}
