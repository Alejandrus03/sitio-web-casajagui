<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                <h2 class="text-2xl font-bold mb-4">Editar Categoría</h2>          
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nombre</label>
            <input type="text" name="nombre"
                   class="w-full border p-2 rounded"
                   value="{{ old('nombre', $categoria->nombre) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Categoría Padre (opcional)</label>
            <select name="parent_id" class="w-full border p-2 rounded">
                <option value="">Ninguna</option>
                @foreach($categoriasPadre as $cat)
                    <option value="{{ $cat->id }}"
                            @if($cat->id == $categoria->parent_id) selected @endif>
                        {{ $cat->nombre }}
                    </option>
                @endforeach
            </select>
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
