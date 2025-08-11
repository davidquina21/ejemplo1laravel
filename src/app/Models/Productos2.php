<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos2 extends Model
{

protected $table='productos2';
    // Permitir asignación masiva
    protected $fillable = ['nombre', 'precio', 'stock'];
    // Relación: Un producto pertenece a una categoría
    public function productos2 ()    {
        return $this->hasMany(Productos2::class);
    }
}