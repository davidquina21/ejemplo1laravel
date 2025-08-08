<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos2 extends Model
{
    // Permitir asignación masiva
    protected $fillable = ['nombre', 'precio', 'stock'];
    // Relación: Un producto pertenece a una categoría
    public function pedidos()    {
        return $this->hasMany(Pedido_producto::class);
    }
}
