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
            ['name' => 'Joan', 'DNI' => '49423676B', 'pedidos' => 'cigales'],
        ];

       

		Client::insert($client);

    }
}
    

