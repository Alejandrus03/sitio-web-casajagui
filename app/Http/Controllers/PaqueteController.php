<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Lista de paquetes.
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Formulario para crear un paquete.
     */
    public function create()
    {
        return view('paquetes.create');
    }

    /**
     * Guarda un nuevo paquete.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
        ]);

        Paquete::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete creado con éxito.');
    }

    /**
     * (Opcional) Muestra un paquete específico.
     */
    public function show(Paquete $paquete)
    {
        return view('paquetes.show', compact('paquete'));
    }

    /**
     * Formulario para editar un paquete.
     */
    public function edit(Paquete $paquete)
    {
        return view('paquetes.edit', compact('paquete'));
    }

    /**
     * Actualiza un paquete en la base de datos.
     */
    public function update(Request $request, Paquete $paquete)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date|after_or_equal:fecha_inicio',
        ]);

        $paquete->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete actualizado con éxito.');
    }

    /**
     * Elimina un paquete.
     */
    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('paquetes.index')
                         ->with('success', 'Paquete eliminado.');
    }
}
