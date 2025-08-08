<?php

namespace Database\Seeders;

use App\Models\Productos2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productos2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
          Productos2::create([
            'nombre' => 'Teclado',
            'precio' => '45.20',
            'stock' => '10',
        ]);
         Productos2::create([
            'nombre' => 'Monitor',
            'precio' => '80.50',
            'stock' => '50',
        ]);


    }
}
