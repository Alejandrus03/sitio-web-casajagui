<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class MenuPublicoController extends Controller
{
    public function index(Request $request)
    {
        // 1. Obtener el término de búsqueda
        $search = $request->query('search'); // o $request->input('search');

        // 2. Cargar categorías padre, subcategorías y filtrar productos visibles
        //    que coincidan con el término de búsqueda (en 'nombre' o 'descripcion').
        $categorias = Categoria::with([
            'children',
            'productos' => function ($query) use ($search) {
                $query->where('visible', true);

                // Si existe término de búsqueda, filtramos
                if ($search) {
                    $query->where(function($q) use ($search) {
                        $q->where('nombre', 'like', '%'.$search.'%')
                          ->orWhere('descripcion', 'like', '%'.$search.'%');
                    });
                }
            },
            'children.productos' => function ($query) use ($search) {
                $query->where('visible', true);

                if ($search) {
                    $query->where(function($q) use ($search) {
                        $q->where('nombre', 'like', '%'.$search.'%')
                          ->orWhere('descripcion', 'like', '%'.$search.'%');
                    });
                }
            },
        ])
        ->whereNull('parent_id')
        ->get();

        // 3. Retornar la vista con las categorías filtradas y el 'search' actual
        return view('public-menu', compact('categorias', 'search'));
    }
}
