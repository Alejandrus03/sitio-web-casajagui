@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
   
<div 
  class="bg-amber-100 text-black py-12 px-6 rounded-lg mx-6 mb-2 shadow-lg m-2">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2">
          <p class="font-display text-lg leading-relaxed font-retrovintage">
            CASA JAGUI Concept House, es una empresa que nace de la convergencia de 3 marcas 
            dedicadas al rubro turístico tanto receptivo, interno y emisor:
          </p>
          <strong class="font-display">
            JaguiTour, CasaJagui Restaurante y CasaJagui Airbnb
          </strong>
          <br>
          <a href="{{ route('conocenos') }}">
            <button 
              class="mt-4 m-2 font-bold py-3 px-6 rounded-full shadow bg-[#b45309] text-white 
                         hover:bg-[#d97706] transition-colors duration-300"
            >
              Conoce más
            </button>
          </a>
        </div>
        <div class="md:w-1/2 flex justify-center">
          <img 
            src="{{URL::asset('images/source.png')}}" 
            alt="img1" 
            class="rounded-full shadow-xl w-full md:w-auto h-auto m-2"
          >
        </div>
    </div>
</div>

  
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
    
    <div class="bg-blue-100 rounded-lg p-4 hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out flex flex-col">
        <h2 class="text-xl font-semibold mb-2">Agencia de viajes</h2>
        <img src="{{URL::asset('images/logoJT.png')}}" alt="JaguiTour" class="mb-2 flex-grow object-contain rounded-lg">
        <a href="{{ route('viajes') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded self-start mt-auto">Ver Más</a>
    </div>
    
    <div class="bg-gray-200 rounded-lg p-4 hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out flex flex-col">
        <h2 class="text-xl font-semibold mb-2">Restaurante</h2>
        <img src="{{URL::asset('images/logoCJ.png')}}" alt="Restaurante" class="mb-2 flex-grow object-contain">
        <a href="{{ route('restaurante') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded self-start mt-auto">Ver Más</a>
    </div>
    <div class="bg-red-200 rounded-lg p-4 hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out flex flex-col">
        <h2 class="text-xl font-semibold mb-2">Hospedaje</h2>
        <img src="{{URL::asset('images/airbnb.svg')}}" alt="airbnb" class="mb-2 flex-grow object-contain">
        <a href="{{ route('hospedaje') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded self-start mt-auto">Ver Más</a>
    </div>
</div>

@endsection
