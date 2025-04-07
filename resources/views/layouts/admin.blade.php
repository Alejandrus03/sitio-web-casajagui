<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-gray-200 min-h-screen flex">
    <aside class="bg-gray-800 text-white w-64 px-4 py-6 flex flex-col space-y-6">
        <div class="text-2xl font-bold">
            <a href="{{ route('productos.index') }}" class="hover:text-gray-300">CASA JAGUI</a>
        </div>
        <nav class="flex flex-col space-y-2">
            <a href="{{ route('productos.index') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700
                      @if(request()->routeIs('productos.*')) bg-gray-900 @endif">
                Productos
            </a>
            <a href="{{ route('categorias.index') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700
                      @if(request()->routeIs('categorias.*')) bg-gray-900 @endif">
                Categorías
            </a>
            <a href="{{ route('paquetes.index') }}"
               class="block px-3 py-2 rounded hover:bg-gray-700
                      @if(request()->routeIs('paquetes.*')) bg-gray-900 @endif">
                Paquetes
            </a>
        </nav>
    </aside>

    <main class="flex-1 p-6">
        <header class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Panel de Administración</h1>
        </header>

        <div class="bg-white p-6 rounded shadow">
            @yield('content')
        </div>
    </main>
</body>
</html>
