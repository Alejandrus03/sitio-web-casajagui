<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = ['nombre', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Categoria::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Categoria::class, 'parent_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
    
    public static function listForSelect($parentId = null, $prefix = '', &$result = [])
    {
    // Obtenemos las categorías que tengan parent_id = $parentId
    $categorias = static::where('parent_id', $parentId)->orderBy('nombre')->get();

    foreach ($categorias as $cat) {
        // Agregamos al array un elemento con la indentación
        $result[$cat->id] = $prefix . $cat->nombre;

        // Llamada recursiva para subcategorías
        static::listForSelect($cat->id, $prefix . '-- ', $result);
    }

    return $result;
    }

}
