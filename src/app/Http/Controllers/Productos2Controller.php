<?php

namespace App\Http\Controllers;

use App\Models\Productos2;
use Illuminate\Http\Request;

class Productos2Controller extends Controller
{
      public function index()     {
        // Cargar todas las categorías con sus productos
        $productos2 = Productos2::with('productos2')->get();
        return view('Productos2.index', compact('Productos2'));
    }
}
