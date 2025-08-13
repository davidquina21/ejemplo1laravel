<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Producto extends Model
{

    protected $fillable = ['nombre', 'precio', 'stock'];
    protected $table='productos';
    public function pedidos()    {

        return $this->hasMany(Pedido_producto::class);
    }
}