<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'fullname' => 'Administrator',
            'nomor' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234'),
            'role' => 'Admin'
        ]);
        User::factory()->create([
            'fullname' => 'Guru',
            'nomor' => 'guru',
            'email' => 'guru@guru.com',
            'password' => Hash::make('guru1234'),
            'role' => 'Guru'
        ]);
        User::factory()->create([
            'fullname' => 'Siswa',
            'nomor' => 'siswa',
            'email' => 'siswa@siswa.com',
            'password' => Hash::make('guru1234'),
            'role' => 'Siswa'
        ]);
    }
}
