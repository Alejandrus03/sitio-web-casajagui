<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                

    <h2 class="text-2xl font-bold mb-4">Paquetes</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('paquetes.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Nuevo Paquete
        </a>
    </div>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2">Nombre</th>
                <th class="p-2">Precio</th>
                <th class="p-2">Vigencia</th>
                <th class="p-2">Imagen</th>
                <th class="p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paquetes as $paquete)
                <tr class="border-b">
                    <td class="p-2">{{ $paquete->nombre }}</td>
                    <td class="p-2">${{ $paquete->precio }}</td>
                    <td class="p-2">
                        {{ $paquete->fecha_inicio }} - {{ $paquete->fecha_fin }}
                    </td>
                    <td class="p-2"> 
                        @if($paquete->imagen)
                                <img 
                                src="data:image/jpeg;base64,{{ base64_encode($paqyete->imagen) }}" 
                                alt="Imagen de {{ $paquete->nombre }}" 
                                class="w-20 h-20 rounded mb-2"
                                />
                        @endif
                    </td>
                    <td class="p-2 flex space-x-2">
                        <a href="{{ route('paquetes.edit', $paquete->id) }}"
                           class="bg-yellow-400 text-black px-2 py-1 rounded hover:bg-yellow-300">
                            Editar
                        </a>
                        <form action="{{ route('paquetes.destroy', $paquete->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                    onclick="return confirm('¿Eliminar este paquete?')">
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