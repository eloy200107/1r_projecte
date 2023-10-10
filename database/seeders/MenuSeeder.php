<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $menu = [
            ['nom_plat' => 'patatas bravas','preu' => '5,50€',],
            ['nom_plat' => 'alitas de pollo','preu' => '4,80€',],
            ['nom_plat' => 'Nachos con Guacamole','preu' => '5,00€',],
            ['nom_plat' => 'Tabla de enbutidos','preu' => '6,80€',],
            ['nom_plat' => 'Nuggets de pollo','preu' => '3,80€',],
            ['nom_plat' => 'Calamares a la andaluza','preu' => '5,60€',],
            ['nom_plat' => 'Chipirones','preu' => '5,90€',],
            ['nom_plat' => 'montadito de lomo','preu' => '3,50€',],
            ['nom_plat' => 'Carpaccio de Bacalao','preu' => '7,50€',],
            ['nom_plat' => 'Huevos Rotos','preu' => '5,50€',],
            ['nom_plat' => 'Morro de Cerdo','preu' => '5,85€',],
            ['nom_plat' => 'Oreja de cerdo','preu' => '5,30€',],
            ['nom_plat' => 'croquetas de jamon','preu' => '6,00€',],
            ['nom_plat' => 'pulpo a la gallega','preu' => '8,50€',],
            ['nom_plat' => 'pimientos de padrón','preu' => '3,50€',],
            ['nom_plat' => 'Jamón Ibérico','preu' => '6,50€',],
            ['nom_plat' => 'Lacón Gallego','preu' => '5,80€',],
            ['nom_plat' => 'Buñuelos de Bacalao','preu' => '4,30€',],
            ['nom_plat' => 'nuesta Bomba,de finde','preu' => '5,80€',],
            ['nom_plat' => 'Albondigas','preu' => '5,90€',],
            ['nom_plat' => 'Boquerones','preu' => '5,50€',],
            ['nom_plat' => 'Txistorra de Navarra','preu' => '5,80€',],
            ['nom_plat' => 'Lasaña Vegetal','preu' => '3,80€',],
            ['nom_plat' => 'Tortilla de patatas','preu' => '4,80€',],
            ['nom_plat' => 'Ensalada Griega','preu' => '3,50€',],
			
		];
        Menu::insert($menu);
    }
}