<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra la lista de productos.
     */
    public function index()
    {
        // Cargamos cada producto con su categoría (si existe)
        $productos = Producto::with('categoria.parent')->get();
        return view('productos.index', compact('productos'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function create()
    {
        // Este método devuelve un array [id => 'nombre con --']
        $categorias = Categoria::listForSelect();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Guarda un producto nuevo en la base de datos (imagen como BLOB).
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'categoria_id' => 'nullable|exists:categorias,id',
            'imagen' => 'nullable|image|max:2048', // Se admite imagen, no exceder 2MB
        ]);

        // Convertimos la imagen a binario (BLOB) si existe
        $imagenBinaria = null;
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            // Obtener el contenido binario del archivo
            $imagenBinaria = file_get_contents($file->getRealPath());
        }

        // Crear el producto con la imagen en binario
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria_id' => $request->categoria_id,
            'imagen' => $imagenBinaria, // Guardamos el contenido binario
            'visible' => $request->boolean('visible'),
        ]);

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado con éxito.');
    }

    /**
     * Muestra un producto (opcional si lo necesitas).
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Muestra el formulario para editar un producto.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::listForSelect();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Actualiza un producto en la base de datos (imagen como BLOB).
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            // ...
            'imagen' => 'nullable|image|max:2048',
        ]);

        // Si el usuario marcó "remove_image", quitamos la imagen (colocamos null en la BD)
        if ($request->has('remove_image')) {
            $producto->imagen = null;
        }

        // Si se sube un archivo nuevo, lo convertimos a binario y lo asignamos
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $imagenBinaria = file_get_contents($file->getRealPath());
            $producto->imagen = $imagenBinaria;
        }

        // Actualizar otros campos
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        $producto->visible = $request->has('visible');
        $producto->save();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Elimina un producto de la base de datos.
     */
    public function destroy(Producto $producto)
    {
        // No hace falta borrar archivos en disco, ya que la imagen está en la BD.
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado.');
    }
}
