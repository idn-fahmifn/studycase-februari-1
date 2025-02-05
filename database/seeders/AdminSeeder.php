<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data untuk admin account
        User::create([
            'name' => 'administrator',
            'email' => 'admin@idn.com',
            'admin' => true,
            'password' => 'asdasdasd',
        ]);
    }
}
