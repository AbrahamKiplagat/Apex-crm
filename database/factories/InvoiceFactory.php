<?php
// database/factories/InvoiceFactory.php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'deal_id' => \App\Models\Deal::factory(),
            'contact_id' => \App\Models\Contact::factory(),
            'invoice_number' => $this->faker->unique()->text(10),
            'invoice_date' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['draft', 'sent', 'accepted', 'paid', 'cancelled']),
        ];
    }
}
