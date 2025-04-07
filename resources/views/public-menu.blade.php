@extends('layouts.main')

@section('title', 'Menú')

@section('content')

@php
function catHasAnyProduct($cat) {
    if ($cat->productos->count() > 0) {
        return true;
    }
    foreach ($cat->children as $sub) {
        if (catHasAnyProduct($sub)) {
            return true;
        }
    }
    return false;
}
@endphp

<div class="max-w-6xl mx-auto py-4 px-2">
    <!-- Barra de Búsqueda -->
    <form action="{{ route('menu') }}" method="GET"
          class="flex items-center justify-center mb-6 space-x-2 max-w-md mx-auto relative">
        <input
            type="text"
            name="search"
            id="searchInput"
            value="{{ $search ?? '' }}"
            placeholder="Buscar productos..."
            class="border border-yellow-800 p-2 rounded-lg w-full"
            autocomplete="off"
        >
        <button type="submit"
                class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700">
            Buscar
        </button>

        <div id="suggestions" 
             class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded shadow hidden"
             style="z-index: 999;">
        </div>
    </form>

    <h1 class="text-3xl md:text-4xl font-extrabold mb-6 text-center text-gray-800">
        Nuestro Menú
    </h1>

    @foreach($categorias as $cat)
        @if(catHasAnyProduct($cat))
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-orange-700 my-4">
                    {{ $cat->nombre }}
                </h2>
                    @if($cat->productos->count())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($cat->productos as $producto)
                            <div 
                                class="border p-4 rounded-xl shadow bg-white hover:shadow-lg transition cursor-pointer"
                                onclick="openModal(
                                    'data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}',
                                    '{{ $producto->nombre }}',
                                    '{{ $producto->descripcion }}'
                                )"
                            >
                                @if($producto->imagen)
                                    <img 
                                        src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" 
                                        alt="Imagen de {{ $producto->nombre }}" 
                                        class="w-full h-auto rounded mb-2"
                                    />
                                @endif

                                <!-- Nombre del producto -->
                                <h3 class="font-semibold text-lg text-gray-800">
                                    {{ $producto->nombre }}
                                </h3>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Subcategorías -->
                @if($cat->children->count())
                    @foreach($cat->children as $subcat)
                        @if(catHasAnyProduct($subcat))
                            <h3 class="text-xl vast-font font-bold mt-6 ml-4 text-orange-600">
                                {{ $subcat->nombre }}
                            </h3>

                            @if($subcat->productos->count())
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ml-4">
                                    @foreach($subcat->productos as $producto)
                                        <div 
                                            class="border p-4 rounded-xl shadow bg-white hover:shadow-lg transition cursor-pointer"
                                            onclick="openModal(
                                                'data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}',
                                                '{{ $producto->nombre }}',
                                                '{{ $producto->descripcion }}'
                                            )"
                                        >
                                            @if($producto->imagen)
                                                <img 
                                                    src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" 
                                                    alt="Imagen de {{ $producto->nombre }}" 
                                                    class="w-full h-auto rounded mb-2"
                                                />
                                            @endif

                                            <h4 class="font-semibold text-lg text-gray-800">
                                                {{ $producto->nombre }}
                                            </h4>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endif
            </div>
        @endif
    @endforeach
</div>

<!-- Modal (oculto por defecto) -->
<div 
    id="modal" 
    class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden"
>
    <!-- Contenedor del contenido del modal -->
    <div class="bg-white p-6 rounded shadow relative max-w-md w-full mx-4">
        <!-- Botón Cerrar -->
        <button 
            id="closeModal" 
            class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold"
        >
            &times;
        </button>
        
        <!-- Título del producto -->
        <h3 id="modalTitle" class="text-2xl font-bold text-gray-800 mb-2"></h3>

        <!-- Imagen ampliada -->
        <img 
            id="modalImage" 
            src="" 
            alt="Producto" 
            class="w-full h-auto rounded mb-4"
        />

        <!-- Descripción breve -->
        <p id="modalDescription" class="text-gray-700"></p>
    </div>
</div>

<!-- Script para manejar el modal -->
<script>
    const modal = document.getElementById('modal');
    const closeModalBtn = document.getElementById('closeModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');

    // Función para abrir el modal con imagen, título y descripción
    function openModal(imgSrc, title, description) {
        modalImage.src = imgSrc;
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modal.classList.remove('hidden');
    }

    // Cerrar modal al hacer clic en la "X"
    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Cerrar modal si se hace clic en el fondo
    modal.addEventListener('click', (e) => {
        if (e.target.id === 'modal') {
            modal.classList.add('hidden');
        }
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const suggestionsBox = document.getElementById('suggestions');

    searchInput.addEventListener('input', async function() {
        const term = this.value.trim();

        // Si el término es muy corto, ocultamos sugerencias
        if (term.length < 2) {
            suggestionsBox.classList.add('hidden');
            return;
        }

        try {
            // Petición AJAX a la ruta de sugerencias
            const response = await fetch(`{{ route('search.suggestions') }}?term=${encodeURIComponent(term)}`);
            const data = await response.json();

            // Si no hay resultados, ocultamos sugerencias
            if (!data.length) {
                suggestionsBox.innerHTML = '';
                suggestionsBox.classList.add('hidden');
                return;
            }

            // Construir la lista de sugerencias
            let html = '<ul class="py-2">';
            data.forEach(prod => {
                html += `
                  <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer"
                      onclick="selectSuggestion('${prod.nombre}')"
                  >
                    ${prod.nombre}
                  </li>`;
            });
            html += '</ul>';

            suggestionsBox.innerHTML = html;
            suggestionsBox.classList.remove('hidden');
        } catch (error) {
            console.error('Error al obtener sugerencias:', error);
        }
    });

    // Ocultar sugerencias si el usuario hace clic fuera
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
            suggestionsBox.classList.add('hidden');
        }
    });
});

// Función para asignar la sugerencia al input y ocultar el dropdown
function selectSuggestion(value) {
    const input = document.getElementById('searchInput');
    input.value = value;
    document.getElementById('suggestions').classList.add('hidden');
}
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const suggestionsBox = document.getElementById('suggestions');
    const searchForm = searchInput.closest('form'); // Obtener el formulario

    searchInput.addEventListener('input', async function() {
        const term = this.value.trim();

        if (term.length < 2) {
            suggestionsBox.classList.add('hidden');
            return;
        }

        try {
            const response = await fetch(`{{ route('search.suggestions') }}?term=${encodeURIComponent(term)}`);
            const data = await response.json();

            if (!data.length) {
                suggestionsBox.innerHTML = '';
                suggestionsBox.classList.add('hidden');
                return;
            }

            let html = '<ul class="py-2">';
            data.forEach(prod => {
                html += `
                  <li class="px-4 py-1 hover:bg-gray-100 cursor-pointer"
                      onclick="selectSuggestion('${prod.nombre}')">
                    ${prod.nombre}
                  </li>`;
            });
            html += '</ul>';

            suggestionsBox.innerHTML = html;
            suggestionsBox.classList.remove('hidden');
        } catch (error) {
            console.error('Error al obtener sugerencias:', error);
        }
    });

    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !suggestionsBox.contains(e.target)) {
            suggestionsBox.classList.add('hidden');
        }
    });

    // Detectar cuando el input está vacío para restablecer el estado original
    searchInput.addEventListener('input', function() {
        if (this.value.trim() === '') {
            window.location.href = '{{ route('menu') }}'; // Recargar la página del menú
        }
    });
});

// Función para asignar la sugerencia al input y hacer submit automáticamente
function selectSuggestion(value) {
    const input = document.getElementById('searchInput');
    input.value = value;
    document.getElementById('suggestions').classList.add('hidden');

    // Enviar el formulario automáticamente
    input.closest('form').submit();
}
</script>

@endsection
