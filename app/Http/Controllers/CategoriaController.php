<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Muestra la lista de categorías (y subcategorías).
     */
    public function index()
    {
        // Cargamos solo las categorías que no tienen padre (raíz)
        // e incluimos sus children (subcategorías) en cascada
        $categorias = Categoria::with('children')->whereNull('parent_id')->get();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Formulario para crear una nueva categoría.
     */
    public function create()
    {
        // Para seleccionar una categoría padre (si se desea)
        $categoriasPadre = Categoria::whereNull('parent_id')->get();
        return view('categorias.create', compact('categoriasPadre'));
    }

    /**
     * Guarda una nueva categoría.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'parent_id' => 'nullable|exists:categorias,id',
        ]);

        Categoria::create([
            'nombre' => $request->nombre,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría creada con éxito.');
    }

    /**
     * (Opcional) Mostrar una categoría.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Formulario para editar una categoría.
     */
    public function edit(Categoria $categoria)
    {
        // Para no permitir que la categoría se seleccione como padre de sí misma
        $categoriasPadre = Categoria::whereNull('parent_id')
            ->where('id', '!=', $categoria->id)
            ->get();

        return view('categorias.edit', compact('categoria', 'categoriasPadre'));
    }

    /**
     * Actualiza una categoría.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'parent_id' => 'nullable|exists:categorias,id',
        ]);

        // Evitar que se asigne como padre a sí misma
        if ($request->parent_id == $categoria->id) {
            return redirect()->back()->withErrors('No puedes asignar la misma categoría como padre.');
        }

        $categoria->nombre = $request->nombre;
        $categoria->parent_id = $request->parent_id;
        $categoria->save();

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría actualizada con éxito.');
    }

    /**
     * Elimina una categoría.
     */
    public function destroy(Categoria $categoria)
    {
        // Al usar onDelete('cascade') en la migración, se eliminarán subcategorías en cascada
        $categoria->delete();

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría eliminada.');
    }
}
    