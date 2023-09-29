<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedidos;
class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Pedidos = [
            ['nom_pedidos' => 'patatas bravas','preu' => '5,50€',],
            ['nom_pedidos' => 'alitas de pollo','preu' => '4,80€',],
            ['nom_pedidos' => 'Nachos con Guacamole','preu' => '5,00€',],
            ['nom_pedidos' => 'Tabla de enbutidos','preu' => '6,80€',],
            ['nom_pedidos' => 'Nuggets de pollo','preu' => '3,80€',],
            ['nom_pedidos' => 'Calamares a la andaluza','preu' => '5,60€',],
            ['nom_pedidos' => 'Chipirones','preu' => '5,90€',],
            ['nom_pedidos' => 'montadito de lomo','preu' => '3,50€',],
            ['nom_pedidos' => 'Carpaccio de Bacalao','preu' => '7,50€',],
            ['nom_pedidos' => 'Huevos Rotos','preu' => '5,50€',],
            ['nom_pedidos' => 'Morro de Cerdo','preu' => '5,85€',],
            ['nom_pedidos' => 'Oreja de cerdo','preu' => '5,30€',],
            ['nom_pedidos' => 'croquetas de jamon','preu' => '6,00€',],
            ['nom_pedidos' => 'pulpo a la gallega','preu' => '8,50€',],
            ['nom_pedidos' => 'pimientos de padrón','preu' => '3,50€',],
            ['nom_pedidos' => 'Jamón Ibérico','preu' => '6,50€',],
            ['nom_pedidos' => 'Lacón Gallego','preu' => '5,80€',],
            ['nom_pedidos' => 'Buñuelos de Bacalao','preu' => '4,30€',],
            ['nom_pedidos' => 'nuesta Bomba,de finde','preu' => '5,80€',],
            ['nom_pedidos' => 'Albondigas','preu' => '5,90€',],
            ['nom_pedidos' => 'Boquerones','preu' => '5,50€',],
            ['nom_pedidos' => 'Txistorra de Navarra','preu' => '5,80€',],
            ['nom_pedidos' => 'Lasaña Vegetal','preu' => '3,80€',],
            ['nom_pedidos' => 'Tortilla de patatas','preu' => '4,80€',],
            ['nom_pedidos' => 'Ensalada Griega','preu' => '3,50€',],
			
		];
        Pedidos::insert($Pedidos);
    }
}
