<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                <h2 class="text-2xl font-bold mb-4">Categorías</h2>         

    <div class="mb-4">
        <a href="{{ route('categorias.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Nueva Categoría
        </a>
    </div>

    <table class="w-full border-collapse">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 border">Nombre</th>
                <th class="p-2 border">Tipo</th>
                <th class="p-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $cat)
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border font-bold">
                        {{ $cat->nombre }}
                    </td>
                    <td class="p-2 border">
                        Principal
                    </td>
                    <td class="p-2 border">
                        <div class="inline-flex space-x-2">
                            <a href="{{ route('categorias.edit', $cat->id) }}"
                               class="bg-yellow-400 text-black px-2 py-1 rounded hover:bg-yellow-300">
                               Editar
                            </a>
                            <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                        onclick="return confirm('¿Eliminar esta categoría?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <!-- Filas de subcategorías (si existen) -->
                @if($cat->children->count())
                    @foreach($cat->children as $sub)
                        <tr class="hover:bg-gray-50">
                            <td class="p-2 border pl-8 text-gray-700">
                                {{ $sub->nombre }}
                            </td>
                            <td class="p-2 border">
                                Subcategoría
                            </td>
                            <td class="p-2 border">
                                <div class="inline-flex space-x-2">
                                    <a href="{{ route('categorias.edit', $sub->id) }}"
                                       class="bg-yellow-400 text-black px-2 py-1 rounded hover:bg-yellow-300">
                                       Editar
                                    </a>
                                    <form action="{{ route('categorias.destroy', $sub->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                                onclick="return confirm('¿Eliminar esta subcategoría?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            @endforeach
        </tbody>
    </table>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
