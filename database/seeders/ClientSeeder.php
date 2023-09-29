<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $client = [
            ['name' => 'Joan', 'DNI' => '49423676B', 'pedidos' => 'croquetas de jamon'],
            ['name' => 'Marc', 'DNI' => '49353319B', 'pedidos' => 'pimientos de padron'],
            ['name' => 'Josep', 'DNI' => '66367734S', 'pedidos' => 'Boquerons'],
        ];

       

		Client::insert($client);

    }
}
    

