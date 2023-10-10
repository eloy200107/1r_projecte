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
            ['num_mesa' => '10', 'num_clients' => '5'],
            ['num_mesa' => '12', 'num_clients' => '8'],
            ['num_mesa' => '8', 'num_clients' => '10'],
        ];
        Mesa::insert($mesa);

    }
    }

