<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class SearchController extends Controller
{
    public function suggestions(Request $request)
    {
        $term = $request->query('term'); // El texto que el usuario escribe
        // Filtrar productos por nombre (o descripción), limitando resultados
        $productos = Producto::where('nombre', 'like', '%'.$term.'%')
                            ->limit(5)
                            ->get(['id', 'nombre']);

        // Retornar en JSON
        return response()->json($productos);
    }
}
