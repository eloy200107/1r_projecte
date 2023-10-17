<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bar;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Bar = [
            ['direction'=> 'Travessera Gael, 3, Bajos(Tarragona)', 'telefon' => '773877323', 'email'=> 'eltapino@gmail.com'],
			
		];

		Bar::insert($Bar);

    }
}

    

