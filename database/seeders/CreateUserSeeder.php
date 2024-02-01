<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Manager User',
                'email' => 'M@gmail.com',
                'password' => bcrypt('password'),
                'user_level' => 0
            ],
            [
                'name' => 'Lead Developer User',
                'email' => 'LD@gmail.com',
                'password' => bcrypt('password'),
                'user_level' => 3
            ],
            [
                'name' => 'Developer User',
                'email' => 'Dev@gmail.com',
                'password' => bcrypt('password'),
                'user_level' => 5
            ]
        ];
        foreach ($users as $key => $user) { 
            User::create($user);
        }
    }
}
