<?php

namespace Database\Seeders;

use App\Models\taskmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        taskmodel::factory()->count(50)->create();
    }
}
