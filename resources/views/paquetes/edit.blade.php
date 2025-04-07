<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                

    <h2 class="text-2xl font-bold mb-4">Editar Paquete</h2>

    <form action="{{ route('paquetes.update', $paquete->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nombre</label>
            <input type="text" name="nombre"
                   class="w-full border p-2 rounded"
                   value="{{ old('nombre', $paquete->nombre) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Descripción</label>
            <textarea name="descripcion" rows="3"
                      class="w-full border p-2 rounded">{{ old('descripcion', $paquete->descripcion) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Precio</label>
            <input type="number" step="0.01" name="precio"
                   class="w-full border p-2 rounded"
                   value="{{ old('precio', $paquete->precio) }}" required>
        </div>

        <div class="mb-4 flex space-x-4">
            <div class="w-1/2">
                <label class="block font-semibold mb-1">Fecha Inicio</label>
                <input type="date" name="fecha_inicio"
                       class="w-full border p-2 rounded"
                       value="{{ old('fecha_inicio', $paquete->fecha_inicio) }}">
            </div>
            <div class="w-1/2">
                <label class="block font-semibold mb-1">Fecha Fin</label>
                <input type="date" name="fecha_fin"
                       class="w-full border p-2 rounded"
                       value="{{ old('fecha_fin', $paquete->fecha_fin) }}">
            </div>
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Actualizar
        </button>
    </form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
