<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $berita->title }} - Bali Lady Tour</title>
  <link rel="icon" href="{{ asset('frontend/assets/logo.png') }}" type="image/png" />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            blue: {
              700: '#013D9D',
              800: '#002D7A',
              900: '#001F5C',
            }
          }
        }
      }
    }
  </script>
  <!-- Font Awesome CDN for icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar -->
<header id="navbar" class="fixed top-0 left-0 w-full z-50 bg-white shadow">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-3">
    <!-- Logo -->
    <img src="{{ asset('frontend/assets/logo.png') }}" class="h-12" alt="Logo"/>
    
    <!-- Menu Desktop -->
    <nav class="hidden md:flex space-x-6 font-medium text-gray-700">
      <a href="{{ route('home') }}" class="hover:text-pink-600 nav-link">Home</a>
      <a href="{{ route('tourpackage') }}" class="hover:text-pink-600 nav-link">Tour</a>
      <a href="{{ route('carrental') }}" class="hover:text-pink-600 nav-link">Car Rental</a>
      <a href="{{ route('tourexperience') }}" class="hover:text-pink-600 nav-link">Tour Experience</a>
      <a href="{{ route('articles') }}" class="hover:text-pink-600 nav-link">Articles</a>
    </nav>

    <!-- Right Side -->
    <div class="flex items-center space-x-4">
      <!-- Language Dropdown -->
      <div class="relative">
        <button id="globeBtn" class="text-gray-600 text-xl">🌐</button>
        <div id="langMenu" class="hidden absolute right-0 mt-2 w-32 bg-white rounded shadow-lg">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Indonesia</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">English</a>
        </div>
      </div>
      <!-- Book Button -->
      <a href="#"
         class="hidden md:inline-block bg-yellow-400 text-gray-800 font-semibold px-4 py-2 rounded hover:bg-yellow-500 transition">
         Book
      </a>
      <!-- Mobile menu button -->
      <button id="menuBtn" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" 
             id="menuIcon"
             class="h-8 w-8 text-gray-700" fill="none" 
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" 
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden bg-white border-t shadow-lg">
    <nav class="flex flex-col space-y-2 px-6 py-4 text-gray-700 font-medium">
      <a href="{{ route('home') }}" class="mobile-link hover:text-pink-600">Home</a>
      <a href="{{ route('tourpackage') }}" class="mobile-link hover:text-pink-600">Tour</a>
      <a href="{{ route('carrental') }}" class="mobile-link hover:text-pink-600">Car Rental</a>
      <a href="{{ route('tourexperience') }}" class="mobile-link hover:text-pink-600">Tour Experience</a>
      <a href="{{ route('articles') }}" class="mobile-link hover:text-pink-600">Articles</a>
      <a href="#"
         class="bg-yellow-400 text-gray-800 font-semibold px-4 py-2 rounded text-center hover:bg-yellow-500">
         Book
      </a>
    </nav>
  </div>
</header>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-4 gap-8 pt-28">
    <!-- Article Content -->
    <article class="md:col-span-3 space-y-6">
      <h1 class="text-3xl font-bold text-gray-900">
        {{ $berita->title }}
      </h1>
      <div class="flex items-center text-gray-500 text-sm space-x-4">
        <time datetime="{{ $berita->date }}">{{ $berita->date }}</time>
        <div class="flex space-x-3">
          <span>Share</span>
          <a href="#" aria-label="Share on Facebook" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Share on Twitter" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Share on Instagram" class="text-pink-600 hover:text-pink-800"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="Share on WhatsApp" class="text-green-500 hover:text-green-700"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <img src="{{ asset('fotoberita/' . $berita->foto) }}" alt="{{ $berita->title }}" class="w-full rounded-lg shadow-md" />
      <div class="prose max-w-none text-gray-700">
        {!! $berita->content !!}
      </div>
    </article>

    <!-- Sidebar - Updated dengan data dari database -->
    <aside class="md:col-span-1 bg-white rounded-lg shadow p-6">
      <h2 class="text-sm font-semibold text-gray-700 uppercase border-b border-gray-300 pb-2 mb-6">
        TRENDING POST
      </h2>
      <div class="space-y-4">
        @foreach($popularBeritas as $index => $popular)
        <div>
          <h3 class="font-bold text-lg text-gray-900">{{ $index + 1 }}</h3>
          <a href="{{ route('articles.detail', $popular->id) }}" class="block font-semibold text-gray-800 hover:underline">
            {{ Str::limit($popular->title, 60) }}
          </a>
          <p class="text-xs text-gray-500">
            @if($popular->category)
              {{ strtoupper($popular->category->title) }}
            @else
              TRAVEL PACKAGE
            @endif
            - {{ $popular->date }}
          </p>
        </div>
        @endforeach
      </div>
    </aside>
  </main>

  <!-- Related Articles - Updated dengan data dari database -->
  <section class="container mx-auto px-6 py-12">
    <h2 class="text-xl font-bold mb-6">Artikel Terkait</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      @foreach($relatedBeritas as $related)
      <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
        <img src="{{ asset('fotoberita/' . $related->foto) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          @if($related->category)
            <p class="text-sm text-red-500 font-semibold mb-1">{{ $related->category->title }}</p>
          @else
            <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
          @endif
          <h3 class="font-bold text-lg text-gray-800 mb-2">
            {{ Str::limit($related->title, 50) }}
          </h3>
          <div class="flex items-center justify-between text-sm text-gray-500">
            <span>{{ $related->date }}</span>
            <a href="{{ route('articles.detail', $related->id) }}" class="text-red-500 font-medium hover:underline">Read More</a>
          </div>
        </div>
      </article>
      @endforeach
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white text-gray-700 py-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <img src="{{ asset('frontend/assets/logo.png') }}" alt="Logo" class="h-14 mb-4 max-w-full" />
        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
          With our reliable Bali Lady Tour services, you can explore breathtaking islands,
          soak up the sun, and travel comfortably.
        </p>
        <a href="#" class="inline-block bg-indigo-900 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-800 transition">Contact</a>
      </div>
      <div>
        <h4 class="font-bold text-indigo-900 mb-4 uppercase">Menu</h4>
        <ul class="space-y-2 text-gray-600">
          <li><a href="{{ route('home') }}" class="hover:text-indigo-900">Home</a></li>
          <li><a href="{{ route('tourpackage') }}" class="hover:text-indigo-900">Tour</a></li>
          <li><a href="{{ route('carrental') }}" class="hover:text-indigo-900">Car Rental</a></li>
          <li><a href="{{ route('tourexperience') }}" class="hover:text-indigo-900">Tour Experience</a></li>
          <li><a href="{{ route('articles') }}" class="hover:text-indigo-900">Articles</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold text-indigo-900 mb-4 uppercase">Info</h4>
        <ul class="space-y-2 text-gray-600">
          <li><a href="#" class="hover:text-indigo-900">FAQs</a></li>
          <li><a href="#" class="hover:text-indigo-900">Support Center</a></li>
          <li><a href="#" class="hover:text-indigo-900">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold text-indigo-900 mb-4 uppercase">Social</h4>
        <ul class="space-y-2 text-gray-600">
          <li><a href="#" class="hover:text-indigo-900">Instagram</a></li>
          <li><a href="#" class="hover:text-indigo-900">Facebook</a></li>
          <li><a href="#" class="hover:text-indigo-900">Youtube</a></li>
        </ul>
      </div>
    </div>
    <div class="container mx-auto px-6 text-center mt-8 pt-4 border-t border-gray-300 text-sm text-gray-500">
      <p class="md:text-left">© 2025 baliladytour.id All Rights Reserved </p>
      <p class="md:text-right">Designed by <span class="font-medium text-indigo-900">IndoAppsSolusindo</span></p>
    </div>
  </footer>

  <!-- Script -->
  <script>
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const globeBtn = document.getElementById('globeBtn');
    const globeIcon = document.querySelector('.globe-icon');
    const langMenu = document.getElementById('langMenu');
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function handleNavbar() {
      if (window.scrollY > 80) {
        navbar.classList.add('bg-white','shadow-md');
        navbar.classList.remove('bg-transparent');
        navLinks.forEach(a => a.classList.replace('text-white','text-gray-800'));
        globeIcon.classList.replace('text-white','text-gray-800');
        menuIcon.classList.replace('text-white','text-gray-800');
      } else {
        navbar.classList.remove('bg-white','shadow-md');
        navbar.classList.add('bg-transparent');
        navLinks.forEach(a => a.classList.replace('text-gray-800','text-white'));
        globeIcon.classList.replace('text-gray-800','text-white');
        menuIcon.classList.replace('text-gray-800','text-white');
      }
    }

    window.addEventListener('scroll', handleNavbar);
    document.addEventListener('DOMContentLoaded', handleNavbar);

    globeBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      langMenu.classList.toggle('hidden');
    });

    window.addEventListener('click', (e) => {
      if (!globeBtn.contains(e.target) && !langMenu.contains(e.target)) {
        langMenu.classList.add('hidden');
      }
    });

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
