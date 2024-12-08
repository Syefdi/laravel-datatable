<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class PesertaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Syefdi',
            'email' => 'syefdi@contoh.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Zidan',
            'email' => 'zidan@contoh.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Irfan',
            'email' => 'irfan@contoh.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
