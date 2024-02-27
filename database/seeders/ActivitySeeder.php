<?php
// database/seeders/ActivitySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        // Add specific activities
        Activity::create([
            'user_id' => 1,
            'type' => 'call',
            'subject' => 'Client call',
            'due_date' => now()->addDays(5),
            'date' => now(),
            'duration' => 1.5,
            'notes' => 'Discussing project details',
            'status' => 'scheduled',
        ]);

        Activity::create([
            'user_id' => 2,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 1,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 2,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 1,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 2,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 1,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 2,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 1,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 1,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);
        Activity::create([
            'user_id' => 2,
            'type' => 'email',
            'subject' => 'Follow-up email',
            'due_date' => now()->addDays(3),
            'date' => now(),
            'duration' => 0.5,
            'notes' => 'Checking in with the client',
            'status' => 'completed',
        ]);


        // Add more activities as needed...
    }
}
