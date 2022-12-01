<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => str_random(20),
            'email' => str_random(10) . '@contoh.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
