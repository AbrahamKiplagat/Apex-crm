<?php
// database/factories/QuoteFactory.php

namespace Database\Factories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuoteFactory extends Factory
{
    protected $model = Quote::class;

    public function definition()
    {
        return [
            'deal_id' => $this->faker->randomDigitNotNull,
            'contact_id' => $this->faker->randomDigitNotNull,
            'quote_date' => $this->faker->date,
            'expiry_date' => $this->faker->date,
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['draft', 'sent', 'accepted']),
        ];
    }
}
