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
            ['num_mesa' => '1', 'reservada' => false ],
            ['num_mesa' => '2', 'reservada' => false ],
            ['num_mesa' => '3', 'reservada' => false ],
            ['num_mesa' => '4', 'reservada' => false ],
            ['num_mesa' => '5', 'reservada' => false ],

        ];
        Mesa::insert($mesa);

    }
    }

