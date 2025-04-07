<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'fecha_inicio',
        'fecha_fin',
        'visible',
        'imagen'
    ];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'paquete_producto');
    }
}
