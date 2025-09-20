<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Article - Bali Lady Tour</title>
  <link rel="icon" href="assets/olgasehat-icon.png" type="image/png" />
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
  <header id="navbar" class="fixed w-full top-0 z-50 bg-transparent transition-colors duration-300 ease-in-out">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="assets/logo.png" alt="Logo" class="h-10">
    </div>

    <!-- Menu desktop -->
      <nav class="hidden md:flex gap-6 font-medium">
        <a href="home.html" class="nav-link text-gray-800">Home</a>
        <a href="tourpackage.html" class="nav-link text-gray-800">Tour</a>
        <a href="carrental.html" class="nav-link text-gray-800">Car Rental</a>
        <a href="tourexperience.html" class="nav-link text-gray-800">Tour Experience</a>
        <a href="articles.html" class="nav-link text-gray-800">Articles</a>
      </nav>

      <!-- Right Side -->
      <div class="flex items-center space-x-4">
        <!-- Language Dropdown -->
      <div class="relative">
        <button id="globeBtn" class="globe-icon text-white text-xl">🌐</button>
        <div id="langMenu" class="hidden absolute right-0 mt-2 w-32 bg-white rounded shadow-lg">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Indonesia</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">English</a>
        </div>
      </div>
        <!-- Book Button -->
        <a href="#"
           class="hidden md:inline-block bg-yellow-500 text-white font-semibold px-4 py-2 rounded hover:bg-yellow-600 transition">
           Book
        </a>
        <!-- Mobile menu button -->
        <button id="menuBtn" class="md:hidden focus:outline-none">
          <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg"
               class="h-8 w-8 text-gray-800 transition-colors duration-300" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile menu dropdown -->
    <div id="mobileMenu" class="hidden flex-col md:hidden bg-white text-gray-800 absolute w-full left-0 top-full transition-all duration-300 shadow-md">
      <div class="px-6 py-4 space-y-4">
        <a href="home.html" class="mobile-link block hover:text-blue-700">Home</a>
        <a href="tourpackage.html" class="mobile-link block hover:text-blue-700">Tour</a>
        <a href="carrental.html" class="mobile-link block hover:text-blue-700">Car Rental</a>
        <a href="tourexperience.html" class="mobile-link block hover:text-blue-700">Tour Experience</a>
        <a href="articles.html" class="mobile-link block hover:text-blue-700">Articles</a>
        <a href="#" class="block bg-yellow-500 px-4 py-2 rounded text-white font-semibold text-center">Book</a>
      </div>
    </div>
</header>

  <!-- Hero -->
  <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('assets/tour.png');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 container mx-auto px-6 h-full flex flex-col justify-center">
      <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-4 max-w-3xl">
        LET’S SEE OUR <br> ARTICLES
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
      <img src="assets/gallery1.jpg" alt="Article" class="w-full h-48 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Paket Liburan Bali 4 Hari 3 Malam dengan Hotel Bintang 4
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 12, 2025</span>
          <a href="articlesdetail.html" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="assets/gallery3.jpg" alt="Article" class="w-full h-48 object-cover" />
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
      <img src="assets/gallery4.jpg" alt="Article" class="w-full h-48 object-cover" />
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
      <img src="assets/gallery5.jpg" alt="Article" class="w-full h-48 object-cover" />
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


  <!-- Footer -->
  <footer class="bg-white text-gray-700 py-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
      <img src="assets/logo.png" alt="Logo" class="h-14 mb-4 max-w-full">
      <p class="text-gray-600 text-sm mb-6 leading-relaxed">
        With our reliable Bali Lady Tour services, you can explore breathtaking islands,
        soak up the sun, and travel comfortably.
      </p>
      <a href="#" class="inline-block bg-indigo-900 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-800 transition">Contact</a>
    </div>
      <div>
      <h4 class="font-bold text-indigo-900 mb-4 uppercase">Menu</h4>
      <ul class="space-y-2 text-gray-600">
          <li><a href="#" class="hover:text-indigo-900">Home</a></li>
          <li><a href="#" class="hover:text-indigo-900">Tour</a></li>
          <li><a href="#" class="hover:text-indigo-900">Car Rental</a></li>
          <li><a href="#" class="hover:text-indigo-900">Tour Experience</a></li>
          <li><a href="#" class="hover:text-indigo-900">Articles</a></li>
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

  <!-- Cart Sidebar -->
  <aside id="cartSidebar" class="fixed top-0 right-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
    <div class="flex justify-between items-center p-4 border-b border-gray-200">
      <h2 class="font-bold text-lg">JADWAL DIPILIH</h2>
      <button id="closeCartSidebar" aria-label="Close sidebar" class="text-gray-700 hover:text-gray-900 focus:outline-none">
        <i class="fas fa-times fa-lg"></i>
      </button>
    </div>
    <div class="p-4 text-gray-600">
      Belum ada jadwal di keranjang.
    </div>
  </aside>

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

  const SCROLL_THRESHOLD = 80;

  function applyTopState() {
    // Navbar transparan
    navbar.classList.remove('bg-white', 'shadow-md');
    navbar.classList.add('bg-transparent');

    // Desktop links putih
    navLinks.forEach(a => {
      a.classList.remove('text-gray-800');
      a.classList.add('text-white');
    });

    // Icon putih
    globeIcon.classList.add('text-white');
    globeIcon.classList.remove('text-gray-800');
    menuIcon.classList.add('text-white');
    menuIcon.classList.remove('text-gray-800');

    // Mobile menu transparan penuh
    mobileMenu.classList.remove('bg-white', 'text-gray-800', 'bg-white/70');
    mobileMenu.classList.add('bg-transparent', 'text-white');
  }

  function applyScrolledState() {
    // Navbar putih solid
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('bg-white', 'shadow-md');

    // Desktop links gelap
    navLinks.forEach(a => {
      a.classList.remove('text-white');
      a.classList.add('text-gray-800');
    });

    // Icon gelap
    globeIcon.classList.add('text-gray-800');
    globeIcon.classList.remove('text-white');
    menuIcon.classList.add('text-gray-800');
    menuIcon.classList.remove('text-white');

    // Mobile menu putih solid
    mobileMenu.classList.remove('bg-transparent', 'text-white');
    mobileMenu.classList.add('bg-white', 'text-gray-800');
  }

  function handleNavbar() {
    if (window.scrollY > SCROLL_THRESHOLD) {
      applyScrolledState();
    } else {
      applyTopState();
    }
  }

  // Jalankan saat load & scroll
  window.addEventListener('scroll', handleNavbar);
  document.addEventListener('DOMContentLoaded', handleNavbar);

  // Toggle mobile menu
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    handleNavbar();
  });

  // Toggle language
  globeBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    langMenu.classList.toggle('hidden');
  });

  // Tutup dropdown language kalau klik di luar
  window.addEventListener('click', (e) => {
    if (!globeBtn.contains(e.target) && !langMenu.contains(e.target)) {
      langMenu.classList.add('hidden');
    }
  });
</script>
</body>
</html>
