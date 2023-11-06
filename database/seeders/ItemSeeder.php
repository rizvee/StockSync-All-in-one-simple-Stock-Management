<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        // Seed items using the Item model factory
        Item::factory(50)->create(); // Assuming 50 items to be created
    }
}
