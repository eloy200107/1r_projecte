<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            ['user' => 'user1', 'password' => 'password'],
            ['user' => 'admin', 'password' => 'password'],
            ['user' => 'client', 'password' => 'password'],
        ];
        user::insert($user);
    }
}
