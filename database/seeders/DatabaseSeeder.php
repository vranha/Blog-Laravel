<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\Message::factory(10)->create();
        $this->call(MessagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
