<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah user dengan email 'admin@admin' sudah ada
        if (DB::table('users')->where('email', 'admin@admin')->doesntExist()) {
            DB::table('users')->insert([
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => Hash::make('adminadmin'), 
            ]);
        }
    }
}