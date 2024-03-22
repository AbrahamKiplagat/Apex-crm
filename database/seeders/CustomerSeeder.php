<?php
namespace Database\Seeders;
// use Faker\Factory as Faker;
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
        // Seed sample customer data
        Customer::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'country' => 'United States',
            'phone' => '+1 123-456-7890',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'country' => 'Canada',
            'phone' => '+1 987-654-3210',
        ]);

        // Add more customers as needed
    }
}
