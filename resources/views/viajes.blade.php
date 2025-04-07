@extends('layouts.main')

@section('title', 'Jagui Tour')

@section('content')
<section class="pbg-gray-100">

<header class="relative bg-cover bg-center h-screen flex items-center justify-center" 
        style="background-image: url('{{URL::asset('images/pr.jpg')}}');">
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>
  
  <div class="relative z-10 text-center text-white px-4">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Explora el Mundo con Nosotros</h1>
    <p class="text-lg md:text-xl max-w-xl mx-auto">
    <strong>Jaguitour,</strong> agencia de viajes, es una marca dedicada a crear aventuras a través de nuestro México mágico y destinos increíbles en el extranjero que solo en sueños teníamos la opción de visualizar, con Jaguitour todo es posible.
    </p>
  </div>
</header>

<!-- Sección de Destinos Populares -->
<section id="destinos" class="py-12 px-4">
  <h2 class="text-3xl font-bold text-center mb-8">Destinos Populares</h2>
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/paris.jpg')}}" alt="paris" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Europa</h3>
      <p class="text-gray-700">
        Descubre la Ciudad de la Luz, sus calles románticas y su icónica Torre Eiffel.
      </p>
    </div>
    
    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/5352.jpg')}}" alt="cancun" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Cancún, México</h3>
      <p class="text-gray-700">
        Playas de arena blanca, aguas cristalinas y una vida nocturna vibrante.
      </p>
    </div>
    
    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/mountainslago.jpg')}}" alt="sa" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Sudamérica</h3>
      <p class="text-gray-700">
      Explora la riqueza cultural y los paisajes impresionantes de un continente lleno de 
      aventura, gastronomía y experiencias inolvidables.
      </p>
    </div>

    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/cabos.png')}}" alt="paris" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Los Cabos</h3>
      <p class="text-gray-700">
        Famoso por sus playas, vida nocturna, deportes acuáticos y el icónico Arco del Fin del Mundo.
      </p>
    </div>
    
    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/ixtapa_.png')}}" alt="cancun" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Ixtapa Zihuatanejo</h3>
      <p class="text-gray-700">
        Destino de playa en el Pacífico, combina lujo moderno con encanto pesquero tradicional y naturaleza tropical.
      </p>
    </div>

    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/Foto de Sabel Blanco puerto vallarta.jpg')}}" alt="cancun" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Puerto Vallarta</h3>
      <p class="text-gray-700">
        Puerto con encanto colonial, playas doradas, vida artística vibrante y atardeceres inolvidables sobre el Pacífico.
      </p>
    </div>
    
    <div class="bg-white rounded-lg shadow p-4">
      <img src="{{URL::asset('images/pueblos magicos.jpg')}}" alt="sa" 
           class="w-full h-auto rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Pueblos Mágicos</h3>
      <p class="text-gray-700">
       Pueblos con historia, cultura, arquitectura tradicional y paisajes únicos que muestran la esencia de México.
      </p>
    </div>
  </div>
</section>

<section id="contacto" class="bg-white py-12 px-4">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-6">Contáctanos en Jagui Tour</h2>
      <p class="text-center text-gray-700 mb-8">
        Para más información sobre viajes y paquetes, llámanos a nuestro número directo en la región:
      </p>
      <p class="text-center text-xl font-bold text-orange-700">
      4171722497
      </p>
    </div>
</section>

@endsection
