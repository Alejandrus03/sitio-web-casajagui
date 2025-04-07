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
                <th class="border px-4 py-2">Ver descripción</th>
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
                    <!-- Columna Ver Descripción -->
                    <td class="border px-4 py-2 text-center">
                    <button onclick="openModal({{ json_encode($producto->descripcion) }})" 
                            class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                        Ver descripción
                    </button>
                    </td>
                                <!-- Columna Imagen -->
                    <td class="border px-4 py-2 text-center">
                    @if($producto->imagen)
                        <img src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" 
                            alt="Imagen de {{ $producto->nombre }}" 
                            class="w-16 h-16 object-cover rounded"/>
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
    <!-- Modal para mostrar la descripción del producto -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden z-50">
  <div class="bg-white p-6 rounded shadow relative max-w-md w-full mx-4">
    <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold">
      &times;
    </button>
    <h3 class="text-2xl font-bold mb-4">Descripción del Producto</h3>
    <p id="modalDescription" class="text-gray-700"></p>
  </div>
</div>

<!-- Scripts -->
<script>
  const modal = document.getElementById('modal');
  const modalDescription = document.getElementById('modalDescription');
  const closeModalBtn = document.getElementById('closeModal');

  function openModal(description) {
    modalDescription.textContent = description;
    modal.classList.remove('hidden');
  }

  closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
</script>
</x-app-layout>
