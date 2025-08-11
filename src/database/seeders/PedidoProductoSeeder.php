<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido_producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Productos2;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = Cliente::where('nombre', 'Rosibel')->first();
        $pedido = $cliente->pedidos()->first();
        $producto = Productos2::where('nombre', 'Teclado')->first();
        $producto2 = Productos2::where('nombre', 'Monitor')->first();
        Pedido_producto::create([

            'cantidad'=>3,
            'total'=> $producto->precio*3,
            'producto_id'=>$producto->id,
             'pedido_id'=>$pedido->id,
        ]);

        Pedido_producto::create([

            'cantidad'=>5,
            'total'=> $producto2->precio*5,
            'producto_id'=>$producto2->id,
             'pedido_id'=>$pedido->id,
        ]);

    }
}
