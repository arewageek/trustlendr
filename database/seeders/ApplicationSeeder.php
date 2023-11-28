<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 10 application records
        for ($i = 0; $i < 10; $i++) {
            DB::table('applications')->insert([
                'applicant' => 'Applicant ' . ($i + 1),
                'amount' => rand(1000, 5000),
                'interest' => rand(5, 15),
                'app_id' => 'APP' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                'due_date' => now()->addDays(rand(1, 30)), // Random due date within the next 30 days
                // 'status' will default to 'pending' as per the migration definition
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
