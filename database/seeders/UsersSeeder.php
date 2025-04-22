<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Siswa 1',
            'email' => 'siswa_1@siswa.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Siswa');

        User::create([
            'name' => 'Siswa 2',
            'email' => 'siswa_2@siswa.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Siswa');

        User::create([
            'name' => 'Siswa 3',
            'email' => 'siswa_3@siswa.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('Siswa');
    }
}
