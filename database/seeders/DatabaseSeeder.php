<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // seeder for the applications migration
        // Generate 10 application records
        for ($i = 0; $i < 10; $i++) {
            DB::table('applications')->insert([
                'applicant' => 'Applicant ' . ($i + 1),
                'amount' => rand(1000, 50000),
                'interest' => rand(500, 10000),
                'app_id' => 'APP' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                'due_date' => now()->addDays(rand(1, 30)), // Random due date within the next 30 days
                // 'status' will default to 'pending' as per the migration definition
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
