<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            "name"=> "mutan lal",
            "email"=> "mua@gmail.com",
            "password"=> bcrypt("password"),
        ]);
    }
}
