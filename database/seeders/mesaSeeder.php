<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mesa;
class mesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mesa = [
            ['id' => '1', 'reservada' => false , 'user_id' => null],
            ['id' => '2', 'reservada' => false , 'user_id' => null],
            ['id' => '3', 'reservada' => false , 'user_id' => null],
            ['id' => '4', 'reservada' => false , 'user_id' => null],
            ['id' => '5', 'reservada' => false , 'user_id' => null],

        ];
        Mesa::insert($mesa);

    }
    }

