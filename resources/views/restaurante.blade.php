@extends('layouts.main')

@section('title', 'Restaurante')

@section('content')
<section class="bg-gray-100 p-8 text-black">
  <h2 class="text-2xl md:text-3xl font-bold mb-6">
    Restaurante
  </h2>

  <p class="text-gray-700 mb-6">
    Casa Jagui, restaurante, es una inspiración de un mundo retro-vintage mezclado con lugares imperdibles alrededor del mundo, su concepto musical inspirado en los discos de acetato es como si te trasladaras a otra dimensión, todo ello más el exquisito sabor de sus platillos y bebidas hacen un lugar único en la región.
  </p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <!-- Imagen 1 -->
    <div 
      class="w-full h-auto rounded shadow cursor-pointer hover:shadow-lg transition p-1"
      onclick="openModal('{{URL::asset('images/img3.jpg')}}', 'Desayunos', 'Ideal para quienes buscan comenzar su día con un sabor clásico y un toque único.')"
    >
      <img 
        src="{{URL::asset('images/img3.jpg')}}" 
        alt="Desayunos" 
        class="w-full h-auto rounded"
      />
      <p class="text-center text-xl font-bold text-orange-700">Desayunos</p>
    </div>

    <!-- Imagen 2 -->
    <div 
      class="w-full h-auto rounded shadow cursor-pointer hover:shadow-lg transition p-1"
      onclick="openModal('{{URL::asset('images/es.jpg')}}', 'Bebidas', 'Disfruta de tus una amplia gama de bebias de tu preferencia.')"
    >
      <img 
        src="{{URL::asset('images/es.jpg')}}" 
        alt="cafe" 
        class="w-full h-auto rounded"
      />
      <p class="text-center text-xl font-bold text-orange-700">Bebidas clásicas</p>
    </div>

    <!-- Imagen 3 -->
    <div 
      class="w-full h-auto rounded shadow cursor-pointer hover:shadow-lg transition p-1"
      onclick="openModal('{{URL::asset('images/img1.jpg')}}', 'Comida', 'Perfecto para los paladares que buscan experimentar nuevos sabores.')"
    >
      <img 
        src="{{URL::asset('images/img1.jpg')}}" 
        alt="Platillo 3" 
        class="w-full h-auto rounded"
      />
      <p class="text-center text-xl font-bold text-orange-700">Comida</p>
    </div>
  </div>

  <a href="{{ route('menu') }}">
    <button 
      class="bg-orange-600 text-white px-4 py-2 rounded-full hover:bg-orange-700 transition"
    >
      Ver Menú
    </button>
  </a>
</section>

<div 
  id="modal" 
  class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center hidden"
>

  <div class="bg-white p-6 rounded shadow relative max-w-md w-full mx-4">
    <button 
      id="closeModal" 
      class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl font-bold"
    >
      &times;
    </button>

    <h3 id="modalTitle" class="text-2xl font-bold text-gray-800 mb-2"></h3>

    <img 
      id="modalImage" 
      src="" 
      alt="Platillo" 
      class="w-full h-auto rounded mb-4"
    />

    <p id="modalDescription" class="text-gray-700"></p>
  </div>
</div>

<script>
  const modal = document.getElementById('modal');
  const closeModalBtn = document.getElementById('closeModal');
  const modalImage = document.getElementById('modalImage');
  const modalTitle = document.getElementById('modalTitle');
  const modalDescription = document.getElementById('modalDescription');

  function openModal(imgSrc, title, description) {
    modalImage.src = imgSrc;
    modalTitle.textContent = title;
    modalDescription.textContent = description;
    modal.classList.remove('hidden');
  }

  closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  modal.addEventListener('click', (e) => {
    if (e.target.id === 'modal') {
      modal.classList.add('hidden');
    }
  });
</script>
@endsection
