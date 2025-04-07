<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
      <!-- Contenedor de botones en grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Botón 1 -->
        <a href="{{ route('productos.index') }}" class="flex flex-col items-center">
          <div class="w-28 h-28 rounded-xl overflow-hidden bg-gray-100 shadow-md hover:shadow-xl transition">
            <img 
              src="{{ asset('images/producto.png') }}" 
              alt="Menú 1" 
              class="w-full h-full object-cover"
            >
          </div>
          <span class="mt-2 text-base font-medium text-gray-700">Productos</span>
        </a>

        <!-- Botón 2 -->
        <a href="{{ route('categorias.index') }}" class="flex flex-col items-center">
          <div class="w-28 h-28 rounded-xl overflow-hidden bg-gray-100 shadow-md hover:shadow-xl transition">
            <img 
              src="{{ asset('images/categorias.png') }}" 
              alt="Menú 2" 
              class="w-full h-full object-cover"
            >
          </div>
          <span class="mt-2 text-base font-medium text-gray-700">Categorías</span>
        </a>

        <!-- Botón 3 -->
        <a href="{{ route('paquetes.index') }}" class="flex flex-col items-center">
          <div class="w-28 h-28 rounded-xl overflow-hidden bg-gray-100 shadow-md hover:shadow-xl transition">
            <img 
              src="{{ asset('images/paquetes.png') }}" 
              alt="Menú 3" 
              class="w-full h-full object-cover"
            >
          </div>
          <span class="mt-2 text-base font-medium text-gray-700">Paquetes</span>
        </a>
      </div>
    </div>
  </div>
</x-app-layout>
