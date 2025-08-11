<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
 // Permitir asignación masiva
 protected $fillable = ['nombre', 'email', 'telefono'];
 // Relación: Una categoría tiene muchos productos
 public function pedidos() {
 return $this->hasMany(Pedido::class);
 }
}