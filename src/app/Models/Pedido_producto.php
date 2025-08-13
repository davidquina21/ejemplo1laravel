<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido_producto extends Model
{
    protected $fillable = ['cantidad','total', 'producto_id', 'pedido_id'];
    public function pedidos()    {
        return $this->belongsTo(Pedido_producto::class);
    }
    public function producto(){
        return $this->belongsTo(Pedido_producto::class);
    }
}
