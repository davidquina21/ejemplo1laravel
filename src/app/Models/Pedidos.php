<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    // Permitir asignación masiva
    protected $fillable = ['cliente_id', 'fecha_pedido', 'total'];
    // Relación: Un producto pertenece a una categoría
    public function cliente()    {
        return $this->belongsTo(Clientes::class);
    }

    public function pedido_productos() {
 return $this->hasMany(Pedido_producto::class);
 }
}
