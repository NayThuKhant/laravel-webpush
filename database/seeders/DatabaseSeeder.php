<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "Nay Thu Khant",
            "email" => "naythukhant644@gmail.com",
            "password" => \Hash::make("password")
        ]);
    }
}
