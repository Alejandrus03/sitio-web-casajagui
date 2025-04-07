<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                
    <h2 class="text-2xl font-bold mb-4">Crear Paquete</h2>

    <form action="{{ route('paquetes.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nombre</label>
            <input type="text" name="nombre" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Descripción</label>
            <textarea name="descripcion" rows="3" class="w-full border p-2 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Precio</label>
            <input type="number" step="0.01" name="precio" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4 flex space-x-4">
            <div class="w-1/2">
                <label class="block font-semibold mb-1">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" class="w-full border p-2 rounded">
            </div>
            <div class="w-1/2">
                <label class="block font-semibold mb-1">Fecha Fin</label>
                <input type="date" name="fecha_fin" class="w-full border p-2 rounded">
            </div>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Imagen (opcional)</label>
            <input type="file" name="imagen" class="w-full border p-2 rounded">
        </div>

        <!-- Podrías agregar un multiselect para productos si deseas -->
        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Guardar
        </button>
    </form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>

