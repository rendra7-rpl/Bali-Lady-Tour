@extends('Frontend.Layout.frontend')

@section('title', 'Tour Package - Bali Lady Tour')

@section('content')
<!-- Hero -->
<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/tour.png') }}');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
    <div class="max-w-xl">
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
        LET'S SEE OUR <br/> PACKAGES
      </h1>
      <p class="text-white/90 text-sm sm:text-base md:text-lg">
        Discover a variety of tour packages tailored to your interests and preferences. From serene beach escapes to thrilling adventure tours, we offer something for everyone.
      </p>
    </div>
  </div>
</section>

<!-- Packages -->
<section class="max-w-7xl mx-auto py-16 px-6">
  <div class="text-center mb-12">
    <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900">
      Bali Lady Tours Package
    </h3>
    <p class="text-gray-500 mt-2 text-lg">
      Try Variety of Benefits when using our services
    </p>
  </div>

  <!-- Grid Cards (satu grid saja, semua card masuk sini) -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Sunrise Trekking</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Start your day with an unforgettable sunrise trekking at Mount Batur...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 95 / Person</p>
          <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Snorkeling Tour</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Discover the colorful underwater world of Bali with our guided snorkeling tour...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 75 / Person</p>
            <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Cultural Tour</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Experience Bali's rich culture with visits to temples, dance shows, and traditional villages...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 85 / Person</p>
            <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

     <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Cultural Tour</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Experience Bali's rich culture with visits to temples, dance shows, and traditional villages...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 85 / Person</p>
            <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

     <!-- Card 5 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Cultural Tour</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Experience Bali's rich culture with visits to temples, dance shows, and traditional villages...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 85 / Person</p>
            <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

     <!-- Card 6 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img src="{{ asset('frontend/assets/konten.jpg') }}" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">Package Bali <br> Cultural Tour</h4>
        </div>
      </div>
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Experience Bali's rich culture with visits to temples, dance shows, and traditional villages...
        </p>
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center"><span class="mr-1">💰</span> USD 85 / Person</p>
            <a href="{{ url('/detailtour') }}" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Pagination -->
<div class="flex justify-center mt-12">
  <nav class="inline-flex -space-x-px">
    <!-- Page 1 (active) -->
    <a href="#" aria-current="page"
      class="z-10 inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 border border-gray-300">
      1
    </a>
    <!-- Page 2 -->
    <a href="#"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 hover:bg-gray-100">
      2
    </a>
    <!-- Page 3 -->
    <a href="#"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 hover:bg-gray-100">
      3
    </a>
    <!-- Next -->
    <a href="#"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 hover:bg-gray-100">
      Next
    </a>
    <!-- Last -->
    <a href="#"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 hover:bg-gray-100">
      Last
    </a>
  </nav>
</div>
@endsection
