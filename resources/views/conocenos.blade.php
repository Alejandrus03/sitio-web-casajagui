@extends('layouts.main')

@section('title', 'Conócenos')

@section('content')
  <section 
    class="bg-cover bg-center h-64 md:h-64 flex items-center justify-center relative"
    style="background-image: url('{{URL::asset('images/source2.jpg')}}');"
  >
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <div class="relative z-10 text-center text-white">
      <h1 class="text-3xl md:text-5xl font-extrabold">Conócenos</h1>
    </div>
  </section>

  <section class="max-w-5xl mx-auto py-10 px-4">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
      Nuestra Historia
    </h2>

    <div class="relative pl-8">
      <div class="border-l-4 border-orange-600 absolute h-full left-2 top-0"></div>
      
      <!-- Bloque 1 -->
      <div class="mb-8">
        <div class="flex items-center mb-2">
          <div class="bg-orange-600 w-5 h-5 rounded-full mr-4"></div>
          <h3 class="text-xl font-semibold text-gray-800">Los Inicios (1980)</h3>
        </div>
        <p class="ml-9 text-gray-600">
        Hubo una idea, la del Profesor Francisco Javier López Campos que quiso realizar paquetes con transporte y hotel para el personal docente de diversas escuelas con  la finalidad de tener vacaciones dignas en destinos emblemáticos de México. Era la época dorada de Acapulco y por consiguiente el destino predilecto
        </p>
      </div>
      
      <!-- Bloque 2 -->
      <div class="mb-8">
        <div class="flex items-center mb-2">
          <div class="bg-orange-600 w-5 h-5 rounded-full mr-4"></div>
          <h3 class="text-xl font-semibold text-gray-800">Expansión (1990)</h3>
        </div>
        <p class="ml-9 text-gray-600">
        Fue tanta la aceptación año tras año que después de una década decidió emprender un crecimiento donde implicaría la contratación de personal para la atención de oficinas mientras él dedicaba su tiempo en encontrar directamente en los destinos tarifas preferenciales tanto en hoteles como en transporte terrestre
        </p>
      </div>
      
      <!-- Bloque 3 -->
      <div class="mb-8">
        <div class="flex items-center mb-2">
          <div class="bg-orange-600 w-5 h-5 rounded-full mr-4"></div>
          <h3 class="text-xl font-semibold text-gray-800">Presente</h3>
        </div>
        <p class="ml-9 text-gray-600">
          Hoy en día Casa Jagui Concept House es un lugar con diversos servicios destacando por ser una empresa pionera en la industria dentro de Acámbaro y dándo una gran imoportancia a la atención al cliente.       
        </p>
      </div>
    </div>
  </section>

  <section class="bg-white py-10 px-4">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
        Curiosidades
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Tarjeta 1 -->
        <div class="p-6 bg-gray-50 rounded shadow hover:shadow-md transition">
          <h3 class="text-xl font-bold text-orange-600 mb-2">Comunidad</h3>
          <p class="text-gray-600">
          Asociación con las principales aerolíneas con tarifas preferenciales
          </p>
        </div>

        <!-- Tarjeta 2 -->
        <div class="p-6 bg-gray-50 rounded shadow hover:shadow-md transition">
          <h3 class="text-xl font-bold text-orange-600 mb-2">Innovación</h3>
          <p class="text-gray-600">
          Única agencia en la ciudad con certificaciones por parte de Secretaria de Turismo estatal y nacional
          </p>
        </div>

        <!-- Tarjeta 3 -->
        <div class="p-6 bg-gray-50 rounded shadow hover:shadow-md transition">
          <h3 class="text-xl font-bold text-orange-600 mb-2">Reconocimientos</h3>
          <p class="text-gray-600">
            A lo largo de los años, hemos recibido múltiples premios por nuestro compromiso con la excelencia y la responsabilidad social.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-orange-600 py-10 px-4 text-white text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">
      ¡Sé parte de nuestra historia!
    </h2>
    <p class="mb-6">
      Te invitamos a conocer más sobre nuestros servicios y unirte a nuestra familia de clientes satisfechos.
    </p>
    <a href="{{ route('contacto') }}" class="bg-white text-orange-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-50 transition">
      Contáctanos
    </a>
  </section>

@endsection
