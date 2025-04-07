@extends('layouts.main')

@section('title', 'Hospedaje')

@section('content')
<section class="bg-gray-100 py-10 px-4 text-black">
  <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-8">
    <div class="md:w-1/2">
      <img 
        src="{{URL::asset('images/hos1.jpg')}}" 
        alt="Imagen de Airbnb" 
        class="w-full h-auto rounded shadow"
      />
    </div>

    <div class="md:w-1/2">
      <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-4">
        Experiencia Airbnb
      </h2>
      <p class="text-gray-700 mb-4">
      Airbnb Casa Jagui, es el lugar idóneo para hospedarte, mezcla la tranquilidad, el toque hogareño con una ubicación única en la ciudad.
      </p>
      <p class="text-gray-700 mb-6">
      ¡Regálate la oportunidad de descansar en un entorno tranquilo y lleno de personalidad! Te esperamos para que disfrutes cada detalle y descubras por qué este espacio es la opción ideal para tu próxima estancia.
      </p>

      <div class="mb-4 md:mb-0">
        <img src="{{URL::asset('images/airbnb.svg')}}" alt="Logo" class="h-20">
      </div>
      <br>
      <a 
        href="https://www.airbnb.com/slink/UOkmYtzd" 
        target="_blank" 
        rel="noopener noreferrer"
        class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition"
      >
        Ver en Airbnb
      </a>
    </div>
  </div>
</section>

@endsection
