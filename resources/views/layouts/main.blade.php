<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Casa Jagui')</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-300 min-h-screen flex flex-col">

  <!-- Navbar -->
  <nav class="bg-orange-900 text-black p-4 rounded-lg m-2 flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <a href="{{ route('inicio') }}">
        <img src="{{URL::asset('images/logoCJ.jpg')}}" alt="Logo" class="h-10">
      </a>
      <a href="{{ route('inicio') }}">
      <span class="font-mono text-white">CASA JAGUI</span>
      </a>
    </div>

    <!-- Menú para pantallas grandes -->
    <div class="hidden md:flex space-x-4">
      <a href="{{ route('inicio') }}" class="bg-white p-2 w-24 h-10 rounded-full shadow flex justify-center items-center">
        Inicio
      </a>
      <a href="{{ route('contacto') }}" class="bg-white p-2 w-24 h-10 rounded-full shadow flex justify-center items-center">
        Contacto
      </a>
    </div>

    <!-- Desplegable (visible en pantallas pequeñas) -->
    <div class="relative md:hidden">
      <button
        id="menu-toggle"
        class="bg-white p-2 w-24 h-10 rounded-full shadow">
        ☰
      </button>
      <div
        id="menu"
        class="absolute right-0 top-full mt-2 w-48 bg-white rounded-lg shadow-lg hidden z-50"
      >
        <a href="{{ route('inicio') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Inicio</a>
        <a href="{{ route('contacto') }}" class="block px-4 py-2 text-black hover:bg-gray-200">Contacto</a>
      </div>
    </div>
  </nav>
  
  <!-- Contenido Principal -->
  @yield('content')
  
  <!-- Footer -->
  <footer class="bg-orange-900 p-8">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Izquierda: Logo -->
      <div class="mb-4 md:mb-0">
        <img src="{{URL::asset('images/logoCJ.jpg')}}" alt="Logo" class="h-20">
      </div>
      <!-- Centro: Información de contacto y FAQs -->
      <div class="mb-4 md:mb-0 text-center">
        <p class="text-white text-lg">Contacto: casajagui@gmail.com</p>
        <a href="{{ route('faq') }}"><p class="text-white text-lg">Preguntas Frecuentes</p></a>
      </div>
      <!-- Derecha: Redes Sociales -->
      <div class="flex space-x-4">
        <span class="text-white">Siguenos:</span>
        <a href="https://www.instagram.com/casajagui/" target="_blank">
          <img src="{{URL::asset('images/instagram.png')}}" alt="Instagram" class="h-8">
        </a>
        <a href="https://www.facebook.com/CasaJagui" target="_blank">
          <img src="{{URL::asset('images/facebook.png')}}" alt="Facebook" class="h-8">
        </a>
      </div>
    </div>
  </footer>
  <footer class="bg-orange-900 p-8">
    <div>
      <!-- Centro: Información de contacto y FAQs -->
      <div class="mb-4 md:mb-0 text-center">
        <div class="mt-auto text-sm text-gray-400">
            &copy; {{ date('Y') }} Casa Jagui
        </div>
      </div>
     
    </div>
  </footer>


  <!-- Script para el menú -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleBtn = document.getElementById('menu-toggle');
      const menu = document.getElementById('menu');

      // Despliega/oculta el menú al hacer clic en el botón
      toggleBtn.addEventListener('click', (event) => {
        event.stopPropagation();
        menu.classList.toggle('hidden');
      });

      // Cierra el menú si se hace clic fuera de él
      document.addEventListener('click', (event) => {
        if (!menu.contains(event.target) && !toggleBtn.contains(event.target)) {
          menu.classList.add('hidden');
        }
      });
    });
  </script>
</body>
</html>
