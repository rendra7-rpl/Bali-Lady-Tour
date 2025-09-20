@extends('Frontend.Layout.frontend')

@section('title', 'Articles - Bali Lady Tour')

@section('content')
  <!-- Hero -->
  <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/tour.png') }}');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 container mx-auto px-6 h-full flex flex-col justify-center">
      <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-4 max-w-3xl">
        LET'S SEE OUR <br> ARTICLES
      </h1>
      <p class="text-white text-lg max-w-2xl mb-6">
        Discover our variety of Bali car packages tailored to your requirement and guide-driven trip.
        From economy to luxurious rides, Bali Lady Tour offers the perfect travel companion for an
        unforgettable experience.
      </p>
    </div>
</section>

  <!-- Content -->
<section class="container mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-8">

  <!-- Trending Posts -->
  <aside class="md:col-span-1">
    <h2 class="text-sm font-semibold text-gray-700 uppercase border-b border-gray-300 pb-2 mb-6">
      TRENDING POST
    </h2>
    <div class="space-y-6">
      <div>
        <h3 class="font-bold text-lg text-gray-900">1</h3>
        <a href="#" class="block font-semibold text-gray-800 hover:underline">
          Paket Wisata Bali 3 Hari 2 Malam: Liburan Hemat & Nyaman
        </a>
        <p class="text-xs text-gray-500">TRAVEL PACKAGE - April 10, 2025</p>
      </div>
      <div>
        <h3 class="font-bold text-lg text-gray-900">2</h3>
        <a href="#" class="block font-semibold text-gray-800 hover:underline">
          Sewa Mobil Lepas Kunci di Bali: Mulai dari 250K/Hari
        </a>
        <p class="text-xs text-gray-500">CAR RENTAL - April 08, 2025</p>
      </div>
      <div>
        <h3 class="font-bold text-lg text-gray-900">3</h3>
        <a href="#" class="block font-semibold text-gray-800 hover:underline">
          Honeymoon Package Bali: Private Villa & Tour Romantis
        </a>
        <p class="text-xs text-gray-500">TRAVEL PACKAGE - April 05, 2025</p>
      </div>
      <div>
        <h3 class="font-bold text-lg text-gray-900">4</h3>
        <a href="#" class="block font-semibold text-gray-800 hover:underline">
          Explore Ubud & Kintamani: Paket Tour Sehari Penuh
        </a>
        <p class="text-xs text-gray-500">DAY TOUR - April 02, 2025</p>
      </div>
      <div>
        <h3 class="font-bold text-lg text-gray-900">5</h3>
        <a href="#" class="block font-semibold text-gray-800 hover:underline">
          Airport Transfer Bali: Jemput & Antar dengan Harga Terjangkau
        </a>
        <p class="text-xs text-gray-500">CAR RENTAL - March 30, 2025</p>
      </div>
    </div>
  </aside>

  <!-- Article Cards -->
  <main class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-6">

    <!-- Card 1 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery1.jpg') }}" alt="Article" class="w-full h-48 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Paket Liburan Bali 4 Hari 3 Malam dengan Hotel Bintang 4
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 12, 2025</span>
          <a href="{{ url('/articlesdetail') }}" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery3.jpg') }}" alt="Article" class="w-full h-48 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Car Rental</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Sewa Mobil dengan Supir: Nikmati Liburan Tanpa Repot
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 09, 2025</span>
          <a href="#" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery4.jpg') }}" alt="Article" class="w-full h-48 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Paket Tour Nusa Penida: Snorkeling & Pantai Eksotis
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 06, 2025</span>
          <a href="#" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery5.jpg') }}" alt="Article" class="w-full h-48 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Car Rental</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Promo Sewa Mobil Avanza & Xpander di Bali – Diskon 20%
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 03, 2025</span>
          <a href="#" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>
    <!-- Pagination -->
<div class="flex justify-center mt-10">
  <nav class="inline-flex -space-x-px text-sm">
    <a href="#" class="px-4 py-2 border border-gray-300 bg-red-600 text-white font-semibold">1</a>
    <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">2</a>
    <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">3</a>
    <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">Next</a>
  </nav>
</div>

  </main>
</section>
@endsection
