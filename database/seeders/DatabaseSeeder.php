<?php

namespace Database\Seeders;

use App\Models\DeliveryPoint;
use App\Models\Product;
use App\Models\Robot;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Robot::factory(4)->create();
        Product::factory(69)->create();
        DeliveryPoint::factory(16)->create();
    }
}
