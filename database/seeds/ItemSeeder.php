<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample items
        Item::create([
            'name' => 'Sample Item 1',
            'description' => 'This is a sample item for testing.',
            'price' => 10.99,
            'quantity' => 100,
        ]);

        Item::create([
            'name' => 'Sample Item 2',
            'description' => 'Another sample item for testing.',
            'price' => 15.99,
            'quantity' => 50,
        ]);

        // You can add more items as needed
    }
}
