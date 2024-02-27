<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    public function run()
    {
        Quote::factory()->create([
            'deal_id' => 1,
            'contact_id' => 1,
            'quote_date' => now(),
            'expiry_date' => now()->addDays(30),
            'total' => 500.00,
            'status' => 'sent',
        ]);

        Quote::factory()->create([
            'deal_id' => 2,
            'contact_id' => 2,
            'quote_date' => now(),
            'expiry_date' => now()->addDays(20),
            'total' => 800.00,
            'status' => 'draft',
        ]);

        // Add more seed data as needed

        // Quote::factory(8)->create(); // Use factory to generate additional random quotes
    }
}
