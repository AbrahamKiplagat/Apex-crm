<?php
// database/factories/ActivityFactory.php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'user_id' => rand(1, 10), // Assuming you have a 'users' table
            'type' => $this->faker->randomElement(['call', 'email', 'meeting']),
            'subject' => $this->faker->sentence,
            'due_date' => $this->faker->date,
            'date' => $this->faker->date,
            'duration' => $this->faker->randomFloat(2, 0.5, 3),
            'notes' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['completed', 'scheduled', 'pending']),
        ];
    }
}

