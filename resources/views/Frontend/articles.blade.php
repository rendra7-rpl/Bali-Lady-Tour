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

  <!-- Trending Posts - Updated dengan data dari database -->
  <aside class="md:col-span-1">
    <h2 class="text-sm font-semibold text-gray-700 uppercase border-b border-gray-300 pb-2 mb-6">
      TRENDING POST
    </h2>
    <div class="space-y-6">
      @foreach($popularBeritas as $index => $berita)
      <div>
        <h3 class="font-bold text-lg text-gray-900">{{ $index + 1 }}</h3>
        <a href="{{ route('articles.detail', $berita->id) }}" class="block font-semibold text-gray-800 hover:underline">
          {{ Str::limit($berita->title, 50) }}
        </a>
        <p class="text-xs text-gray-500">
          @if($berita->category)
            {{ strtoupper($berita->category->title) }}
          @else
            TRAVEL PACKAGE
          @endif
          - {{ $berita->date }}
        </p>
      </div>
      @endforeach
    </div>
  </aside>

  <!-- Article Cards - Updated dengan data dari database -->
  <main class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach($beritas as $berita)
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('fotoberita/' . $berita->foto) }}" alt="{{ $berita->title }}" class="w-full h-48 object-cover" />
      <div class="p-4">
        @if($berita->category)
          <p class="text-sm text-red-500 font-semibold mb-1">{{ $berita->category->title }}</p>
        @else
          <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
        @endif
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          {{ Str::limit($berita->title, 60) }}
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>{{ $berita->date }}</span>
          <a href="{{ route('articles.detail', $berita->id) }}" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>
    @endforeach
  </main>
</section>
@endsection
