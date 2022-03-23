<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        for ($i=1; $i<11; $i++) {
            User::create([
            'name' => "Usuario {$i}",
            'email' => "usuario{$i}@email.com",
            'password' => "123123",
            'role' => "user",
        ]);
        }
    }
}
