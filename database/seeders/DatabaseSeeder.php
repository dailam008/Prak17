<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder yang diperlukan
        $this->call([
            PositionSeeder::class,
            EmployeeSeeder::class,
            AdminSeeder::class, // Tambahkan AdminSeeder di sini
        ]);
    }
}