<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mesa;
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
        ];
        mesa::insert($mesa);

    }
    }

