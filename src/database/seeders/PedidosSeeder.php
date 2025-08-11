<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
         $cliente = Cliente::where('nombre', 'Rosibel')->first();
        $cliente->pedidos()->createMany([
            ['fecha_pedido'=>'2025-05-20','total'=>10.50]
        ]);


    }
}
