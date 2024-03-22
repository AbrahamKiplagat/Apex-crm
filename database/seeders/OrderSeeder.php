<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed sample order data
        Order::create([
            'customer_name' => 'John Doe',
            'status' => 'Pending',
            'total_price' => 100.00,
            'shipping_cost' => 10.00,
            'order_date' => now(),
        ]);

        Order::create([
            'customer_name' => 'Jane Smith',
            'status' => 'Processing',
            'total_price' => 150.00,
            'shipping_cost' => 15.00,
            'order_date' => now(),
        ]);

        // Add more orders as needed
    }
}
