<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seed users using the User model factory
        User::factory(20)->create(); // Assuming 20 users to be created
    }
}
