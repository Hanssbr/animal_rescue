<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hanssu',
            'email' => 'rayhan@gmail.com',
            'password' => 'admin',
            'telp' => '081412233112',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'iqbal@gmail.com',
            'password' => 'user',
            'telp' => '081412233112',
            'role' => 'user',
        ]);
    }
}
