<?php

namespace App\Http\Controllers;

use App\Models\Pedido_producto;
use Illuminate\Http\Request;

class Pedido_productoController extends Controller
{
    public function index()     {

        $pedido_productos = Pedido_producto::with('pedidos')->get();
        return view('pedidos_producto.index', compact('pedido_productos'));
    }
}