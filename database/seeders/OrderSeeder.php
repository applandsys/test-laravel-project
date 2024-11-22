<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert([
            ['grand_total' => 250.00, 'shipping_cost' => 20.00, 'discount' => 10.00, 'user_id' => 1],
            ['grand_total' => 150.00, 'shipping_cost' => 15.00, 'discount' => 5.00, 'user_id' => 1],
        ]);
    }
}
