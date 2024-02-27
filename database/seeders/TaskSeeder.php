<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tasks::create([
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'completed' => true,
        ]);

        Tasks::create([
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'completed' => false,
        ]);

        Tasks::create([
            'title' => 'Task 3',
            'description' => 'Description for Task 3',
            'completed' => true,
        ]);

        Tasks::create([
            'title' => 'Task 4',
            'description' => 'Description for Task 4',
            'completed' => false,
        ]);

        Tasks::create([
            'title' => 'Task 5',
            'description' => 'Description for Task 5',
            'completed' => true,
        ]);
    }
}
