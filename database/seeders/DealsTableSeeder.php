<?php
// database/seeders/DealsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealsTableSeeder extends Seeder
{
    public function run()
    {
        // Seed some sample deals
        DB::table('deals')->insert([
            [
                'contact_id' => 1,
                'stage' => 'Lead',
                'value' => 5000.00,
                'probability' => 0.6,
                'close_date' => now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'contact_id' => 2,
                'stage' => 'Negotiation',
                'value' => 8000.00,
                'probability' => 0.7,
                'close_date' => now()->addDays(45),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more deals as needed
        ]);
    }
}
