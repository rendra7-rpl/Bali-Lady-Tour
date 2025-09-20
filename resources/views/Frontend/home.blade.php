@extends('Frontend.Layout.frontend')

@section('title', 'home - Bali Lady Tour')

@section('content')
<!-- Hero Section -->
  <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/bali-lady.jpg') }}');">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 container mx-auto px-6 h-full flex flex-col justify-center">
      <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-4 max-w-3xl">
        EXPLORE BALI
      </h1>
      <p class="text-white text-lg max-w-2xl mb-6">
        Explore the miracles of Bali with Bali Lady Tours. Discover stunning landscapes, exciting adventures, and vibrant culture with our expert Female Tour Guide and driver. Book your unforgettable experience now!
      </p>
      <a href="#" class="inline-block bg-yellow-500 text-white font-semibold px-6 py-3 rounded hover:bg-yellow-600 transition w-max">
        Ask Question
      </a>
    </div>
  </section>

  <!-- Top Values Section -->
  <section class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Top Values For You</h2>
    <p class="text-gray-600 mb-12">Try variety of benefits after using our services</p>
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-8">
      <div class="space-y-4">
        <div class="mx-auto w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl">
          <i class="fas fa-camera"></i>
        </div>
        <h3 class="font-bold text-lg">Documentation</h3>
        <p class="text-gray-600 text-sm">Our female tour guide and driver will document your journey, capturing every memorable moment.</p>
      </div>
      <div class="space-y-4">
        <div class="mx-auto w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl">
          <i class="fas fa-calendar-check"></i>
        </div>
        <h3 class="font-bold text-lg">Easy Booking</h3>
        <p class="text-gray-600 text-sm">Our seamless booking process ensures you can quickly arrange your trip, no matter where you are.</p>
      </div>
      <div class="space-y-4">
        <div class="mx-auto w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl">
          <i class="fas fa-star"></i>
        </div>
        <h3 class="font-bold text-lg">Best Tour Guide</h3>
        <p class="text-gray-600 text-sm">Our experienced female tour guide and driver will help you through breathtaking landscapes and vibrant Balinese culture.</p>
      </div>
      <div class="space-y-4">
        <div class="mx-auto w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-white text-2xl">
          <i class="fas fa-smile"></i>
        </div>
        <h3 class="font-bold text-lg">Happy Tour</h3>
        <p class="text-gray-600 text-sm">Authentic and exciting tour experience in Bali, ensuring a fun and memorable trip.</p>
      </div>
    </div>
  </section>

  <!-- About Section -->
<section class="container mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
  
  <!-- Left: Images -->
  <div class="grid grid-cols-2 gap-4">
    <!-- Big image -->
    <div class="col-span-2 row-span-2">
      <img src="{{ asset('frontend/assets/gallery1.jpg') }}" alt="About Bali Lady Tour 1"
           class="w-full h-full object-cover rounded-lg shadow-md" />
    </div>
    <!-- Small images -->
    <img src="{{ asset('frontend/assets/gallery2.jpg') }}" alt="About Bali Lady Tour 2"
         class="w-full h-40 object-cover rounded-lg shadow-md" />
    <img src="{{ asset('frontend/assets/gallery3.jpg') }}" alt="About Bali Lady Tour 3"
         class="w-full h-40 object-cover rounded-lg shadow-md" />
  </div>

  <!-- Right: Text -->
  <div class="space-y-6">
    <h2 class="text-sm font-bold text-gray-600 uppercase">About Bali Lady Tour</h2>
    <h3 class="text-3xl font-bold leading-snug">
      Discover Bali with Bali Lady Tour: Your <br/> Friendly and Experienced Guide
    </h3>
    <p class="text-gray-700">
      Experience Bali in a whole new way with Bali Lady Tour, your friendly and experienced guide. 
      Explore the island’s stunning natural beauty, from lush rice fields to amazing waterfalls. 
      With Bali Lady Tour expert knowledge, you’ll find hidden gems, learn about local culture, 
      and enjoy exciting adventures.
    </p>
    <p class="text-gray-700">
      Bali Lady Tour tours offer the perfect mix of relaxation and fun. Whether you’re visiting ancient temples, 
      tasting traditional Balinese food, or discovering less-known spots, Eva will make sure you have a memorable experience.
    </p>
  </div>
</section>


  <!-- Tour Packages Section -->
  <section class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold mb-8">Tour Packages</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
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
          <a href="#" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>
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
          <a href="#" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>
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
          <a href="#" class="text-pink-600 font-semibold hover:underline">VIEW DETAIL</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Car Rental Section -->
  <section class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold mb-8">Car Rental</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
      <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">Mid Class</span>
      <img src="https://www.indobalitour.com/public/uploads/car/car_242209020908_toyota-rush.png" alt="Innova Reborn" class="w-full h-40 object-contain bg-gray-100">

      <div class="p-6">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-lg font-bold">Innova Reborn</h3>
            <p class="text-gray-500 text-sm">Passenger van</p>
          </div>
          <div class="text-right">
            <p class="text-xs text-gray-500">From</p>
            <p class="text-red-600 font-bold">Rp 999.999</p>
            <p class="text-xs text-gray-500">per 10 hours <br> overtime 10% / hour</p>
          </div>
        </div>

        <div class="flex items-center gap-6 mt-4 text-gray-600 text-sm">
          <span class="flex items-center gap-1"><i class="fa-solid fa-user-group"></i> 5</span>
          <span class="flex items-center gap-1"><i class="fa-solid fa-suitcase"></i> 4</span>
        </div>

        <ul class="mt-4 space-y-2 text-sm text-gray-700">
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Luxury car 7 seater</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> 10 hours for fullday charter</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> English speaking driver</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Fuel</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Parking fee</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Mineral water</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Note: Depend on pickup area and destination</li>
        </ul>

        <!-- Tombol Book -->
        <button onclick="openModal()" 
          class="mt-6 w-full bg-indigo-900 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700">Book</button>
      </div>
    </div>
      <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">Mid Class</span>
      <img src="https://www.indobalitour.com/public/uploads/car/car_242209020908_toyota-rush.png" alt="Toyota Rush" class="w-full h-40 object-contain bg-gray-100">

      <div class="p-6">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-lg font-bold">Toyota Rush</h3>
            <p class="text-gray-500 text-sm">Passenger van</p>
          </div>
          <div class="text-right">
            <p class="text-xs text-gray-500">From</p>
            <p class="text-red-600 font-bold">Rp 999.999</p>
            <p class="text-xs text-gray-500">per 10 hours <br> overtime 10% / hour</p>
          </div>
        </div>

        <div class="flex items-center gap-6 mt-4 text-gray-600 text-sm">
          <span class="flex items-center gap-1"><i class="fa-solid fa-user-group"></i> 5</span>
          <span class="flex items-center gap-1"><i class="fa-solid fa-suitcase"></i> 4</span>
        </div>

        <ul class="mt-4 space-y-2 text-sm text-gray-700">
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Luxury car 7 seater</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> 10 hours for fullday charter</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> English speaking driver</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Fuel</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Parking fee</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Mineral water</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Note: Depend on pickup area and destination</li>
        </ul>

        <!-- Tombol Book -->
        <button onclick="openModal()" 
          class="mt-6 w-full bg-indigo-900 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700">Book</button>
      </div>
    </div>
      <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">High Class</span>
      <img src="https://www.indobalitour.com/public/uploads/car/car_242209020908_toyota-rush.png" alt="Toyota Alphard" class="w-full h-40 object-contain bg-gray-100">

      <div class="p-6">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="text-lg font-bold">Toyota Alphard</h3>
            <p class="text-gray-500 text-sm">Passenger van</p>
          </div>
          <div class="text-right">
            <p class="text-xs text-gray-500">From</p>
            <p class="text-red-600 font-bold">Rp 999.999</p>
            <p class="text-xs text-gray-500">per 10 hours <br> overtime 10% / hour</p>
          </div>
        </div>

        <div class="flex items-center gap-6 mt-4 text-gray-600 text-sm">
          <span class="flex items-center gap-1"><i class="fa-solid fa-user-group"></i> 8</span>
          <span class="flex items-center gap-1"><i class="fa-solid fa-suitcase"></i> 5</span>
        </div>

        <ul class="mt-4 space-y-2 text-sm text-gray-700">
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Luxury car 7 seater</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> 10 hours for fullday charter</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> English speaking driver</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Fuel</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Parking fee</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Mineral water</li>
          <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Note: Depend on pickup area and destination</li>
        </ul>

        <!-- Tombol Book -->
        <button onclick="openModal()" 
          class="mt-6 w-full bg-indigo-900 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700">Book</button>
      </div>
    </div>
    </div>
  </section>

  <!-- Articles Section -->
<section class="container mx-auto px-6 py-16">
  <h2 class="text-3xl font-bold mb-8 text-center">Our Articles</h2>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

    <!-- Article 1 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery1.jpg') }}" alt="Bali Car Rental" class="w-full h-40 object-cover" />
      <div class="p-4">
        <p class="text-sm text-red-500 font-semibold mb-1">Travel Package</p>
        <h3 class="font-bold text-lg text-gray-800 mb-2">
          Paket Tour Nusa Penida: Snorkeling & Pantai Eksotis
        </h3>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <span>April 06, 2025</span>
          <a href="articlesdetail.html" class="text-red-500 font-medium hover:underline">Read More</a>
        </div>
      </div>
    </article>

    <!-- Article 2 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery3.jpg') }}" alt="Bali Tour Guide" class="w-full h-40 object-cover" />
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

    <!-- Article 3 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('frontend/assets/gallery5.jpg') }}" alt="Nusa Penida Tour" class="w-full h-40 object-cover" />
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

  </div>
</section>


  <!-- Gallery Section -->
<section class="container mx-auto px-6 py-16 overflow-hidden">
  <h2 class="text-3xl font-bold mb-8 text-center">Our Gallery</h2>

  <!-- Wrapper untuk animasi -->
  <div class="relative">
    <div class="flex gap-4 animate-scroll">
      <!-- Gandakan isi supaya loop terlihat mulus -->
      <img src="{{ asset('frontend/assets/gallery1.jpg') }}" alt="Gallery 1" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery2.jpg') }}" alt="Gallery 2" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery3.jpg') }}" alt="Gallery 3" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery4.jpg') }}" alt="Gallery 4" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery5.jpg') }}" alt="Gallery 5" class="w-40 h-28 object-cover rounded-lg shadow-md" />

      <!-- Duplikat supaya seamless -->
      <img src="{{ asset('frontend/assets/gallery1.jpg') }}" alt="Gallery 1" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery2.jpg') }}" alt="Gallery 2" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery3.jpg') }}" alt="Gallery 3" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery4.jpg') }}" alt="Gallery 4" class="w-40 h-28 object-cover rounded-lg shadow-md" />
      <img src="{{ asset('frontend/assets/gallery5.jpg') }}" alt="Gallery 5" class="w-40 h-28 object-cover rounded-lg shadow-md" />
    </div>
  </div>
</section>

<!-- Tambahkan CSS -->
<style>
@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.animate-scroll {
  display: flex;
  width: max-content;
  animation: scroll 20s linear infinite;
}
</style>


  <!-- Customer Reviews Section -->
<section class="container mx-auto px-6 py-16">
  <h2 class="text-3xl font-bold mb-8 text-center">Our Happy Customer Reviews</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Review 1 -->
    <blockquote class="bg-yellow-100 p-6 rounded shadow flex flex-col justify-between h-full">
      <div>
        <div class="flex text-yellow-500 mb-3">
          ★★★★★
        </div>
        <p class="italic">
          "The Bali Lady Tour package was absolutely amazing! From the airport pickup to the full-day trip to Ubud and Kintamani, everything was perfectly arranged. The car was comfortable, the driver was friendly, and the guide shared so much about Balinese culture. Highly recommended!"
        </p>
      </div>
      <footer class="mt-4 font-semibold">- Andrew W</footer>
    </blockquote>

    <!-- Review 2 -->
    <blockquote class="bg-yellow-100 p-6 rounded shadow flex flex-col justify-between h-full">
      <div>
        <div class="flex text-yellow-500 mb-3">
          ★★★★★
        </div>
        <p class="italic">
          "I rented a car from Bali Lady Tour for three days and had a fantastic experience. The car was spotless and well-maintained, the booking process was quick, and the price was very reasonable. It made exploring Bali so easy and stress-free."
        </p>
      </div>
      <footer class="mt-4 font-semibold">- Clara S</footer>
    </blockquote>

    <!-- Review 3 -->
    <blockquote class="bg-yellow-100 p-6 rounded shadow flex flex-col justify-between h-full">
      <div>
        <div class="flex text-yellow-500 mb-3">
          ★★★★★
        </div>
        <p class="italic">
          "The Nusa Penida tour with Bali Lady Tour was the highlight of my holiday! The guide was super friendly, the photo spots were well planned, and lunch was delicious. Every little detail was taken care of, and we truly felt like VIP guests. Thank you Bali Lady Tour!"
        </p>
      </div>
      <footer class="mt-4 font-semibold">- Michael T</footer>
    </blockquote>

  </div>
</section>
@endsection
