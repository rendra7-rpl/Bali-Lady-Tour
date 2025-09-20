<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bali Lady Tour')</title>
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
                        },
                        yellow: {
                            500: '#FBBF24',
                            600: '#F59E0B',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    @stack('css')
</head>
<body class="bg-white text-gray-800 font-sans">
    <!-- Navbar -->
    <header id="navbar" class="fixed w-full top-0 z-50 bg-transparent transition-colors duration-300 ease-in-out">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('frontend/assets/logo.png') }}" alt="Logo" class="h-10" />
            </div>

            <!-- Menu desktop -->
            <nav class="hidden md:flex gap-6 font-medium">
                <a href="{{ url('/') }}" class="nav-link text-white">Home</a>
                <a href="{{ url('/tourpackage') }}" class="nav-link text-white">Tour</a>
                <a href="{{ url('/carrental') }}" class="nav-link text-white">Car Rental</a>
                <a href="{{ url('/tourexperience') }}" class="nav-link text-white">Tour Experience</a>
                <a href="{{ url('/articles') }}" class="nav-link text-white">Articles</a>
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
                <a href="#" class="hidden md:inline-block bg-yellow-500 text-white font-semibold px-4 py-2 rounded hover:bg-yellow-600 transition">
                    Book
                </a>
                <!-- Mobile menu button -->
                <button id="menuBtn" class="md:hidden focus:outline-none">
                    <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-800 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu dropdown -->
        <div id="mobileMenu" class="hidden flex-col md:hidden bg-white text-gray-800 absolute w-full left-0 top-full transition-all duration-300 shadow-md">
            <div class="px-6 py-4 space-y-4">
                <a href="{{ url('/') }}" class="mobile-link block hover:text-blue-700">Home</a>
                <a href="{{ url('/tourpackage') }}" class="mobile-link block hover:text-blue-700">Tour</a>
                <a href="{{ url('/carrental') }}" class="mobile-link block hover:text-blue-700">Car Rental</a>
                <a href="{{ url('/tourexperience') }}" class="mobile-link block hover:text-blue-700">Tour Experience</a>
                <a href="{{ url('/articles') }}" class="mobile-link block hover:text-blue-700">Articles</a>
                <a href="#" class="block bg-yellow-500 px-4 py-2 rounded text-white font-semibold text-center">Book</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-gray-700 py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-14 mb-4 max-w-full" />
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                    With our reliable Bali Lady Tour services, you can explore breathtaking islands,
                    soak up the sun, and travel comfortably.
                </p>
                <a href="#" class="inline-block bg-indigo-900 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-800 transition">Contact</a>
            </div>
            <div>
                <h4 class="font-bold text-indigo-900 mb-4 uppercase">Menu</h4>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="{{ url('/') }}" class="hover:text-indigo-900">Home</a></li>
                    <li><a href="{{ url('/tourpackage') }}" class="hover:text-indigo-900">Tour</a></li>
                    <li><a href="{{ url('/carrental') }}" class="hover:text-indigo-900">Car Rental</a></li>
                    <li><a href="{{ url('/tourexperience') }}" class="hover:text-indigo-900">Tour Experience</a></li>
                    <li><a href="{{ url('/articles') }}" class="hover:text-indigo-900">Articles</a></li>
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

    <!-- JavaScript -->
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
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
            navLinks.forEach(a => {
                a.classList.remove('text-gray-800');
                a.classList.add('text-white');
            });
            globeIcon.classList.add('text-white');
            globeIcon.classList.remove('text-gray-800');
            menuIcon.classList.add('text-white');
            menuIcon.classList.remove('text-gray-800');
            mobileMenu.classList.remove('bg-white', 'text-gray-800', 'bg-white/70');
            mobileMenu.classList.add('bg-transparent', 'text-white');
        }

        function applyScrolledState() {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow-md');
            navLinks.forEach(a => {
                a.classList.remove('text-white');
                a.classList.add('text-gray-800');
            });
            globeIcon.classList.add('text-gray-800');
            globeIcon.classList.remove('text-white');
            menuIcon.classList.add('text-gray-800');
            menuIcon.classList.remove('text-white');
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

        window.addEventListener('scroll', handleNavbar);
        document.addEventListener('DOMContentLoaded', handleNavbar);

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            handleNavbar();
        });

        globeBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            langMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', (e) => {
            if (!globeBtn.contains(e.target) && !langMenu.contains(e.target)) {
                langMenu.classList.add('hidden');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
