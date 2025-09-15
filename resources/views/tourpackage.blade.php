<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lady Bali Tour Packages</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased">
<!-- Navbar -->
<header id="navbar" class="fixed w-full top-0 z-50 bg-transparent transition-colors duration-300 ease-in-out">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="assets/logo.png" alt="Logo" class="h-10">
    </div>

    <!-- Menu desktop -->
    <nav class="hidden md:flex gap-6 font-medium">
      <a href="#" class="nav-link text-white">Home</a>
      <a href="#" class="nav-link text-white">Tour</a>
      <a href="#" class="nav-link text-white">Transfer</a>
      <a href="#" class="nav-link text-white">Tour Experience</a>
      <a href="#" class="nav-link text-white">Articles</a>
    </nav>

    <!-- Mobile menu button -->
    <button id="menuBtn" class="md:hidden focus:outline-none">
      <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" 
           class="h-8 w-8 text-white transition-colors duration-300" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" 
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Globe + Book (desktop only) -->
    <div class="hidden md:flex items-center gap-4 relative">
      <button id="globeBtn" class="focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6 text-white globe-icon transition-colors duration-300">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12h19.5M12 2.25c3.727 4.5 3.727 15 0 19.5M12 2.25c-3.727 4.5-3.727 15 0 19.5" />
        </svg>
      </button>

      <div id="langMenu"
           class="absolute right-16 top-12 bg-white shadow-lg rounded-md py-2 w-40 hidden">
        <a href="?lang=id" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">Bahasa Indonesia</a>
        <a href="?lang=en" class="block px-4 py-2 hover:bg-gray-100 text-gray-700">English</a>
      </div>

      <a id="bookBtn" href="#"
         class="bg-yellow-500 px-4 py-2 rounded text-white font-semibold hover:bg-yellow-600 transition">
        Book
      </a>
    </div>
  </div>

  <!-- Mobile menu dropdown -->
  <div id="mobileMenu" class="hidden flex-col md:hidden absolute w-full left-0 top-full transition-all duration-300">
    <div class="px-6 py-4 space-y-4">
      <a href="#" class="mobile-link block">Home</a>
      <a href="#" class="mobile-link block">Tour</a>
      <a href="#" class="mobile-link block">Transfer</a>
      <a href="#" class="mobile-link block">Tour Experience</a>
      <a href="#" class="mobile-link block">Articles</a>
      <a href="#" class="block bg-yellow-500 px-4 py-2 rounded text-white font-semibold text-center">Book</a>
    </div>
  </div>
</header>

<script>
  const navbar = document.getElementById('navbar');
  const navLinks = document.querySelectorAll('.nav-link');
  const globeIcon = document.querySelector('.globe-icon');
  const globeBtn = document.getElementById('globeBtn');
  const langMenu = document.getElementById('langMenu');
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.getElementById('menuIcon');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  // Navbar scroll effect
  function handleNavbar() {
    if (window.scrollY > 80) {
      navbar.classList.add('bg-white', 'shadow-md');
      navbar.classList.remove('bg-transparent');

      navLinks.forEach(a => {
        a.classList.remove('text-white');
        a.classList.add('text-gray-800');
      });
      globeIcon.classList.remove('text-white');
      globeIcon.classList.add('text-gray-800');
      menuIcon.classList.remove('text-white');
      menuIcon.classList.add('text-gray-800');

      // Mobile menu background putih
      mobileMenu.classList.add('bg-white');
      mobileMenu.classList.remove('bg-black/70');
      mobileLinks.forEach(a => {
        a.classList.remove('text-white');
        a.classList.add('text-gray-800');
      });
    } else {
      navbar.classList.remove('bg-white', 'shadow-md');
      navbar.classList.add('bg-transparent');

      navLinks.forEach(a => {
        a.classList.remove('text-gray-800');
        a.classList.add('text-white');
      });
      globeIcon.classList.remove('text-gray-800');
      globeIcon.classList.add('text-white');
      menuIcon.classList.remove('text-gray-800');
      menuIcon.classList.add('text-white');

      // Mobile menu background hitam transparan
      mobileMenu.classList.add('bg-black/70');
      mobileMenu.classList.remove('bg-white');
      mobileLinks.forEach(a => {
        a.classList.remove('text-gray-800');
        a.classList.add('text-white');
      });
    }
  }

  window.addEventListener('scroll', handleNavbar);
  document.addEventListener('DOMContentLoaded', handleNavbar);

  // Toggle dropdown bahasa
  globeBtn.addEventListener('click', () => {
    langMenu.classList.toggle('hidden');
  });

  // Klik di luar untuk menutup menu bahasa
  window.addEventListener('click', (e) => {
    if (!globeBtn.contains(e.target) && !langMenu.contains(e.target)) {
      langMenu.classList.add('hidden');
    }
  });

  // Mobile menu toggle
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>


<!-- Hero -->
<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('assets/tour.png');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
    <div class="max-w-xl">
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
        LET’S SEE OUR <br/> PACKAGES
      </h1>
      <p class="text-white/90 text-sm sm:text-base md:text-lg">
        Discover a variety of tour packages tailored to your interests and preferences. From serene beach escapes to thrilling adventure tours, we offer something for everyone. Explore our packages and find the perfect one to make your Bali experience truly unique and memorable.
      </p>
    </div>
  </div>
</section>

<!-- Packages -->
<section class="max-w-7xl mx-auto py-16 px-6">
  <div class="text-center mb-12">
  <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900">
    Lady Bali Tours Package
  </h3>
  <p class="text-gray-500 mt-2 text-lg">
    Try Variety of Benefits when using our services
  </p>
</div>
  
  <!-- Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <!-- Image with overlay title -->
      <div class="relative">
        <img src="assets/konten.jpg" alt="Package" class="w-full h-60 object-cover">
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 text-white drop-shadow-lg text-center">
          <h4 class="font-bold text-lg leading-snug">
            Package Bali <br> Sunrise Trekking
          </h4>
        </div>
      </div>

      <!-- Content -->
      <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">
          Start your day with an unforgettable sunrise trekking at Mount Batur. Enjoy the spectacular view,
          guided by local experts, and recharge with a light breakfast on the top of the mountain.
        </p>
        
        <!-- Price & Button -->
        <div class="flex items-center justify-between text-sm font-medium">
          <p class="text-gray-700 flex items-center">
            <span class="mr-1">💰</span> USD 95 / Person
          </p>
          <a href="#" class="text-pink-600 font-semibold hover:underline">
            VIEW DETAIL
          </a>
        </div>
      </div>
    </div>
    <!-- Tambahkan card lain -->
  </div>

 <!-- Pagination -->
<div class="flex justify-center mt-10">
  <nav class="inline-flex -space-x-px text-sm">
    <!-- Page 1 active -->
    <a href="#"
      class="px-4 py-2 border border-gray-300 bg-red-600 text-white font-semibold">
      1
    </a>
    <a href="#"
      class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">
      2
    </a>
    <a href="#"
      class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">
      3
    </a>
    <a href="#"
      class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">
      Next
    </a>
    <a href="#"
      class="px-4 py-2 border border-gray-300 text-blue-600 hover:bg-gray-100">
      Last
    </a>
  </nav>
</div>

</section>



<!-- Footer -->
<footer class="bg-white border-t border-gray-200 py-10 mt-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6">
    <!-- Logo + deskripsi -->
    <div>
      <img src="assets/logo.png" alt="Logo" class="h-14 mb-4">
      <p class="text-gray-600 text-sm mb-6 leading-relaxed">
        With our reliable Bali Lady Tour services, you can explore breathtaking islands,
        soak up the sun, and travel comfortably.
      </p>
      <a href="#"
         class="inline-block bg-indigo-900 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-800 transition">
        Contact
      </a>
    </div>

    <!-- Menu -->
    <div>
      <h4 class="font-bold text-indigo-900 mb-4 uppercase">Menu</h4>
      <ul class="space-y-2 text-gray-600">
        <li><a href="#" class="hover:text-indigo-900">Home</a></li>
        <li><a href="#" class="hover:text-indigo-900">Tour</a></li>
        <li><a href="#" class="hover:text-indigo-900">Hotel & Airport</a></li>
        <li><a href="#" class="hover:text-indigo-900">Tour Transfers</a></li>
        <li><a href="#" class="hover:text-indigo-900">Articles</a></li>
      </ul>
    </div>

    <!-- Info -->
    <div>
      <h4 class="font-bold text-indigo-900 mb-4 uppercase">Info</h4>
      <ul class="space-y-2 text-gray-600">
        <li><a href="#" class="hover:text-indigo-900">FAQs</a></li>
        <li><a href="#" class="hover:text-indigo-900">Support Center</a></li>
        <li><a href="#" class="hover:text-indigo-900">Contact Us</a></li>
      </ul>
    </div>

    <!-- Social -->
    <div>
      <h4 class="font-bold text-indigo-900 mb-4 uppercase">Social</h4>
      <ul class="space-y-2 text-gray-600">
        <li><a href="#" class="hover:text-indigo-900">Instagram</a></li>
        <li><a href="#" class="hover:text-indigo-900">Facebook</a></li>
        <li><a href="#" class="hover:text-indigo-900">Youtube</a></li>
      </ul>
    </div>
  </div>

  <!-- Bottom bar sejajar grid -->
  <div class="border-t border-gray-200 mt-10 pt-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6 text-sm text-gray-600">
      <p class="col-span-2">© 2025 baliladytour.id All Rights Reserved</p>
      <p class="col-span-2 md:text-right md:pr-1">
        Designed by <span class="font-medium text-indigo-900">IndoAppsSolusindo</span>
      </p>
    </div>
  </div>
</footer>

<script>
  const navbar = document.getElementById('navbar');
  const navLinks = document.querySelectorAll('.nav-link');
  const globeIcon = document.querySelector('.globe-icon');
  const globeBtn = document.getElementById('globeBtn');
  const langMenu = document.getElementById('langMenu');
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  // Navbar scroll effect
  function handleNavbar() {
    if (window.scrollY > 80) {
      navbar.classList.add('bg-white','shadow-md');
      navbar.classList.remove('bg-transparent');
      navLinks.forEach(a => {
        a.classList.remove('text-white');
        a.classList.add('text-gray-800');
      });
      globeIcon.classList.remove('text-white');
      globeIcon.classList.add('text-gray-800');
    } else {
      navbar.classList.remove('bg-white','shadow-md');
      navbar.classList.add('bg-transparent');
      navLinks.forEach(a => {
        a.classList.remove('text-gray-800');
        a.classList.add('text-white');
      });
      globeIcon.classList.remove('text-gray-800');
      globeIcon.classList.add('text-white');
    }
  }
  window.addEventListener('scroll', handleNavbar);

  // Toggle dropdown bahasa
  globeBtn.addEventListener('click', () => {
    langMenu.classList.toggle('hidden');
  });

  // Klik di luar untuk menutup menu
  window.addEventListener('click', (e) => {
    if (!globeBtn.contains(e.target) && !langMenu.contains(e.target)) {
      langMenu.classList.add('hidden');
    }
  });

  // Mobile menu toggle
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
</body>
</html>
