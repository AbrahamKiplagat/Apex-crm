<?php
// database/seeders/InvoiceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        // Add specific invoices
        Invoice::create([
            'deal_id' => 1,
            'contact_id' => 1,
            'quote_id' => 1,
            'invoice_number' => 'INV001',
            'invoice_date' => now(),
            'due_date' => now()->addDays(30),
            'total' => 500.00,
            'status' => 'sent',
        ]);

        Invoice::create([
            'deal_id' => 2,
            'contact_id' => 2,
            'quote_id' => 2,
            'invoice_number' => 'INV002',
            'invoice_date' => now(),
            'due_date' => now()->addDays(15),
            'total' => 800.00,
            'status' => 'accepted',
        ]);

        // Add more invoices as needed...
    }
}
