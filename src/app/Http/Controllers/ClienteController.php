<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()     {
        // Cargar todas las categorías con sus productos
        $clientes = Cliente::with('pedidos')->get();
        return view('clientes.index', compact('clientes'));
    }
}