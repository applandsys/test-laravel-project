<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderDetail::insert([
            ['product_id' => 1, 'order_id' => 1, 'unit_price' => 100.00, 'quantity' => 2],
            ['product_id' => 2, 'order_id' => 2, 'unit_price' => 150.00, 'quantity' => 1],
        ]);
    }
}
