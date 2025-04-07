<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-bold mb-4">Lista de Productos</h2>
                    
    <div class="mb-4">
        <a href="{{ route('productos.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Nuevo Producto
        </a>
    </div>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2">Nombre</th>
                <th class="p-2">Categoría</th>
                <th class="p-2">Imagen</th>
                <th class="p-2">Precio</th>
                <th class="p-2">Visible</th>
                <th class="p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="border-b">
                    <td class="p-2">{{ $producto->nombre }}</td>
                    <td class="p-2">
                        @if($producto->categoria)
                            @if($producto->categoria->parent)
                                {{ $producto->categoria->parent->nombre }} > {{ $producto->categoria->nombre }}
                            @else
                                {{ $producto->categoria->nombre }}
                            @endif
                        @else
                            Sin categoría
                        @endif
                    </td>
                    <td class="p-2"> 
                        @if($producto->imagen)
                                <img 
                                src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" 
                                alt="Imagen de {{ $producto->nombre }}" 
                                class="w-20 h-20 rounded mb-2"
                                />
                        @endif
                    </td>
                    <td class="p-2">${{ $producto->precio }}</td>
                    
                    <td class="p-2">
                        @if($producto->visible)
                            <span class="text-green-600 font-semibold">Sí</span>
                        @else
                            <span class="text-red-600 font-semibold">No</span>
                        @endif
                    </td>
                    <td class="p-2 flex space-x-2">

                        <a href="{{ route('productos.edit', $producto->id) }}"
                           class="bg-yellow-400 text-black px-2 py-1 rounded hover:bg-yellow-300">
                           Editar
                        </a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                    onclick="return confirm('¿Eliminar este producto?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
