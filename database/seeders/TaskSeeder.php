<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Complete Laravel Project',
            'description' => 'Finish the task management system.',
            'status' => 'in_progress',
            'due_date' => '2025-01-25',
            'user_id' => 1, // Assuming user ID 1 exists
        ]);
    }
}
