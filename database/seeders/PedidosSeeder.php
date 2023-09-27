<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pedidos;
class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pedidos = [
            ['nom_pedidos' => 'patatas bravas', 'preu' => '5,50€'],
        ];
        pedidos::insert($pedidos);

    }
    }