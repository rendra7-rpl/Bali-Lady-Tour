@extends('Frontend.Layout.frontend')

@section('title', 'Tour Experience - Bali Lady Tour')

@section('content')
<!-- Hero -->
<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/bg2.jpg') }}');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
    <div class="max-w-xl">
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
        LET'S SEE OUR <br/> VIDEO & FOTO
      </h1>
      <p class="text-white/90 text-sm sm:text-base md:text-lg">
         Discover a variety of tour packages tailored to your interests and preferences. From serene beach escapes to thrilling adventure tours, Eva Bali Tours offers something for everyone. Explore our packages and find the perfect one to make your Bali experience truly unique and memorable.
    </div>
  </div>
</section>

 <!-- Section Judul -->
  <section class="text-center py-10">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Video & Foto</h2>
    <p class="text-gray-500 mt-2">Try Variety of Benefits when using our services</p>
  </section>

  <!-- Tombol Switch -->
  <div class="flex justify-center gap-3 my-6">
    <button id="btnVideo"
      class="px-6 py-2 rounded-md font-medium bg-gray-300 text-gray-700 focus:outline-none">
      Video
    </button>
    <button id="btnFoto"
      class="px-6 py-2 rounded-md font-medium bg-gray-300 text-gray-700 focus:outline-none">
      Foto
    </button>
  </div>

  <!-- Galeri Video -->
  <div id="galleryVideo" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-8">
    <!-- 3 video pertama -->
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1015/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Leke-Leke Waterfall with Indo Bali Tour</span>
    </div>
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1016/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Lunch in Kintamani</span>
    </div>
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1019/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Wonderful Day with Indo Bali Tour</span>
    </div>
    <!-- Tambahan 3 video lagi -->
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1020/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Traditional Dance Performance</span>
    </div>
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1021/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Temple Ceremony</span>
    </div>
    <div class="relative bg-black text-white rounded-lg overflow-hidden">
      <img src="https://picsum.photos/id/1022/400/250" class="w-full h-48 object-cover opacity-70">
      <span class="absolute bottom-3 left-3">Bali Sunset Tour</span>
    </div>
  </div>

  <!-- Galeri Foto -->
  <div id="galleryFoto" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 px-8 hidden">
    <!-- Deret 1 -->
    <img src="https://picsum.photos/id/1035/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1036/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1037/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1038/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1039/400/250" class="w-full h-48 object-cover rounded-lg">
    <!-- Deret 2 -->
    <img src="https://picsum.photos/id/1040/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1041/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1042/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1043/400/250" class="w-full h-48 object-cover rounded-lg">
    <img src="https://picsum.photos/id/1044/400/250" class="w-full h-48 object-cover rounded-lg">
  </div>

<!-- Pagination -->
  <div class="flex justify-center mt-10">
    <nav class="inline-flex -space-x-px text-sm">
      <a href="#" class="px-4 py-2 border border-gray-300 bg-red-600 text-white font-semibold">1</a>
      <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">2</a>
      <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">3</a>
      <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">Next</a>
      <a href="#" class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">Last</a>
    </nav>
  </div>
@endsection

@push('scripts')
<script>
    const btnVideo = document.getElementById("btnVideo");
    const btnFoto = document.getElementById("btnFoto");
    const galleryVideo = document.getElementById("galleryVideo");
    const galleryFoto = document.getElementById("galleryFoto");

    // Set default aktif di Video
    btnVideo.classList.add("bg-blue-900", "text-white");

    btnVideo.addEventListener("click", () => {
      galleryVideo.classList.remove("hidden");
      galleryFoto.classList.add("hidden");
      btnVideo.classList.add("bg-blue-900", "text-white");
      btnVideo.classList.remove("bg-gray-300", "text-gray-700");
      btnFoto.classList.add("bg-gray-300", "text-gray-700");
      btnFoto.classList.remove("bg-blue-900", "text-white");
    });

    btnFoto.addEventListener("click", () => {
      galleryFoto.classList.remove("hidden");
      galleryVideo.classList.add("hidden");
      btnFoto.classList.add("bg-blue-900", "text-white");
      btnFoto.classList.remove("bg-gray-300", "text-gray-700");
      btnVideo.classList.add("bg-gray-300", "text-gray-700");
      btnVideo.classList.remove("bg-blue-900", "text-white");
    });
</script>
@endpush
