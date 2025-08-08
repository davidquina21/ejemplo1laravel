<?php

namespace Database\Seeders;

use App\Models\Clientes;
use App\Models\Pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
         $cliente = Clientes::where('nombre', 'Rosibel')->first();
        $cliente->pedidos()->createMany(
            ['fecha_pedido'=>'2025-05-20','total'=>10.50]
        );


    }
}
