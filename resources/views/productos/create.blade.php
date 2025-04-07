<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-bold mb-4">Crear Nuevo Producto</h2>
                
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
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

        <div class="mb-4">
            <label class="block font-semibold mb-1">Categoría</label>
                <select name="categoria_id" class="w-full border p-2 rounded">
            <option value="">Sin categoría</option>
            @foreach($categorias as $id => $nombre)
                <option value="{{ $id }}"
                @if(old('categoria_id', $producto->categoria_id ?? '') == $id) selected @endif>
                    {{ $nombre }}
            </option>
            @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Imagen (opcional)</label>
            <input type="file" name="imagen" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="visible" value="1" class="rounded" checked>
                <span class="ml-2">¿Visible al público?</span>
            </label>
        </div>

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
