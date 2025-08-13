<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
          Producto::create([
            'nombre' => 'Teclado',
            'precio' => '45.20',
            'stock' => '10',
        ]);
         Producto::create([
            'nombre' => 'Monitor',
            'precio' => '80.50',
            'stock' => '50',
        ]);


    }
}
