<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido_producto extends Model
{
     // Permitir asignación masiva
    protected $fillable = ['cantidad','total', 'producto_id', 'pedido_id'];
    // Relación: Un producto pertenece a una categoría
    public function pedido()    {
        return $this->belongsTo(Pedidos::class);
    }

    public function producto(){
        return $this->belongsTo(Productos2::class);

    }
}
