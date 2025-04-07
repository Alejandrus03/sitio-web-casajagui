@extends('layouts.main')

@section('title', 'Preguntas Frecuentes')

@section('content')
<main class="flex-grow">
    <section class="max-w-4xl mx-auto py-12 px-4">
      <h2 class="text-3xl font-bold text-center mb-6">Preguntas Frecuentes</h2>
      <p class="text-center text-gray-700 mb-8 max-w-2xl mx-auto">
        Encuentra respuestas a las dudas más comunes sobre nuestro servicio de hospedaje, restaurante y viajes.
      </p>

      <!-- Caja contenedora de FAQs -->
      <div class="bg-white rounded-lg shadow-md p-6 space-y-4">

        <!-- FAQ 1 -->
        <div class="border-b border-gray-200 pb-2">
          <button 
            class="w-full flex justify-between items-center py-2 text-left focus:outline-none"
            onclick="toggleFAQ('faq1')"
          >
            <span class="text-lg font-semibold text-gray-800">¿Cómo reservo una habitación?</span>
            <svg id="icon-faq1" class="h-5 w-5 text-gray-500 transition-transform duration-300" 
                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div id="faq1" class="hidden mt-2 text-gray-600">
            Para reservar una habitación, visita nuestra página de hospedaje o comunícate con nuestro 
            equipo vía WhatsApp o correo electrónico. Te enviaremos las opciones disponibles y los 
            precios actualizados.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="border-b border-gray-200 pb-2">
          <button 
            class="w-full flex justify-between items-center py-2 text-left focus:outline-none"
            onclick="toggleFAQ('faq2')"
          >
            <span class="text-lg font-semibold text-gray-800">¿Aceptan pagos con tarjeta?</span>
            <svg id="icon-faq2" class="h-5 w-5 text-gray-500 transition-transform duration-300" 
                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div id="faq2" class="hidden mt-2 text-gray-600">
            Sí, aceptamos tarjetas de cualquier banco. No dudes en utilizar tu método de pago favorito.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="pb-2">
          <button 
            class="w-full flex justify-between items-center py-2 text-left focus:outline-none"
            onclick="toggleFAQ('faq3')"
          >
            <span class="text-lg font-semibold text-gray-800">¿Puedo llevar a mi mascota?</span>
            <svg id="icon-faq3" class="h-5 w-5 text-gray-500 transition-transform duration-300" 
                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div id="faq3" class="hidden mt-2 text-gray-600">
            Contamos con espacios pet-friendly en ciertas áreas de hospedaje. Por favor, 
            contáctanos para confirmar la disponibilidad y políticas específicas.
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- Script FAQs -->
  <script>
    function toggleFAQ(id) {
      const answer = document.getElementById(id);
      const icon = document.getElementById('icon-' + id);

      const isOpen = !answer.classList.contains('hidden');
      document.querySelectorAll('[id^="faq"]').forEach(faq => faq.classList.add('hidden'));
      document.querySelectorAll('[id^="icon-faq"]').forEach(iconEl => iconEl.classList.remove('rotate-180'));

      if (!isOpen) {
        answer.classList.remove('hidden');
        icon.classList.add('rotate-180');
      }
    }
  </script>
  @endsection
