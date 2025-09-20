@extends('Frontend.Layout.frontend')

@section('title', 'Car Rental - Bali Lady Tour')

@section('content')
<!-- Hero -->
<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/bg1.png') }}');">
  <div class="absolute inset-0 bg-black/45"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
    <div class="max-w-xl">
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
        LET'S SEE OUR <br/> CAR RENTAL
      </h1>
      <p class="text-white/90 text-sm sm:text-base md:text-lg">
         Discover a variety of tour packages tailored to your interests and preferences. From serene beach escapes to thrilling adventure tours, Eva Bali Tours offers something for everyone. Explore our packages and find the perfect one to make your Bali experience truly unique and memorable.
    </div>
  </div>
</section>

   <!-- Car Rental Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-2">Car Rental</h2>
      <p class="text-gray-500 mb-10">Try Variety of Elements when using our services</p>

      <section class="py-12">
  <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">

    <!-- Card 1 -->
    <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">Mid Class</span>
      <img src="https://i.ibb.co/93N12Rt/car2.png" alt="Innova Reborn" class="w-full h-40 object-contain bg-gray-100">

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

    <!-- Card 2 -->
    <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">Mid Class</span>
      <img src="https://i.ibb.co/93N12Rt/car2.png" alt="Toyota Rush" class="w-full h-40 object-contain bg-gray-100">

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

    <!-- Card 3 -->
    <div class="bg-white shadow-md rounded-xl overflow-hidden relative">
      <span class="absolute top-3 right-3 bg-yellow-300 text-xs font-semibold px-3 py-1 rounded-full">High Class</span>
      <img src="https://i.ibb.co/93N12Rt/car2.png" alt="Toyota Alphard" class="w-full h-40 object-contain bg-gray-100">

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

<!-- Modal (cukup satu kali) -->
<div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 relative">

    <!-- Tombol Close -->
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">✕</button>

    <h2 class="text-2xl font-bold text-gray-800 mb-6">Booking Rental Mobil</h2>

    <!-- FORM -->
    <form class="space-y-1">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
          <input type="text" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Nomor Telepon</label>
          <input type="text" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Nama Hotel</label>
          <input type="email" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Link Gmaps</label>
          <input type="text" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600">Pilih Mobil</label>
          <select class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
            <option>Avanza - Rp 500.000/hari</option>
            <option>Innova Reborn - Rp 800.000/hari</option>
            <option>Alphard - Rp 1.200.000/hari</option>
            <option>Fortuner - Rp 1.500.000/hari</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Tipe Sewa</label>
          <select class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
            <option>Harian</option>
            <option>Mingguan</option>
            <option>Bulanan</option>
          </select>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600">Tanggal Mulai</label>
          <input type="date" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Tanggal Selesai</label>
          <input type="date" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Lokasi Penjemputan</label>
          <input type="text" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Lokasi Pengembalian</label>
          <input type="text" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Catatan Tambahan</label>
        <textarea rows="3" class="mt-1 block w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-300"></textarea>
      </div>

      <div class="text-right">
        <button type="submit" class="bg-indigo-900 text-white px-6 py-2 rounded-lg font-semibold hover:bg-indigo-700">
          Kirim Booking
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Script Modal -->
<script>
  function openModal() {
    document.getElementById('bookingModal').classList.remove('hidden');
    document.getElementById('bookingModal').classList.add('flex');
  }
  function closeModal() {
    document.getElementById('bookingModal').classList.add('hidden');
    document.getElementById('bookingModal').classList.remove('flex');

  }

</script>
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
</section>
@endsection
