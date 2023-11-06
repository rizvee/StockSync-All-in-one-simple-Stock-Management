<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkin;

class CheckinSeeder extends Seeder
{
    public function run()
    {
        // Seed check-ins using the Checkin model factory
        Checkin::factory(100)->create(); // Assuming 100 check-ins to be created
    }
}
