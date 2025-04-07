@extends('layouts.main')

@section('title', 'Contacto')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col md:flex-row items-center justify-center px-4 py-8">
    <div class="md:w-1/2 max-w-md mx-auto bg-white p-8 rounded-lg shadow-2xl text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">¡Contáctanos!</h2>
        <p class="text-gray-600 mb-6">
            Envíanos un mensaje por WhatsApp y te responderemos a la brevedad.
        </p>

        <a 
            href="https://wa.me/5214771299527?text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20sus%20servicios."
            target="_blank"
            class="inline-flex items-center justify-center bg-green-500 text-white text-lg font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-green-600 transition-all mb-6 space-x-2"
        >
            <span>📲 Enviar mensaje por WhatsApp</span>
        </a>

        <div class="mt-4 text-gray-600">
            <p>O si lo prefieres, escríbenos a nuestro correo:</p>
            <p class="font-bold text-gray-800">casajagui@gmail.com</p>
        </div>
    </div>

    <div class="md:w-1/2 max-w-md mx-auto mt-8 md:mt-0 md:ml-8 flex items-center justify-center">
        <img 
            src="{{URL::asset('images/logoCJ.jpg')}}" 
            alt="Ilustración de contacto" 
            class="w-full h-auto rounded-lg shadow-lg"
        />
    </div>
</div>

<!-- Sección: Invitación a visitar el lugar con Google Maps -->
<div class="bg-white py-12 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
            ¡Visítanos!
        </h2>
        <p class="text-gray-600 mb-6 max-w-xl mx-auto">
            Da clic en el mapa para abrir la ubicación en Google Maps y planificar tu ruta.
        </p>
        <div class="w-full h-64 md:h-96 bg-gray-200 rounded overflow-hidden shadow-lg mx-auto">
            <iframe
                class="w-full h-full border-0"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.3699415364076!2d-100.72698478901565!3d20.034941621091466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cd734ae9b24a5%3A0x3f2908f3aef079df!2sCASA%20JAGUI!5e0!3m2!1ses-419!2smx!4v1742397470298!5m2!1ses-419!2smx"
            ></iframe>
        </div>
    </div>
</div>
@endsection
