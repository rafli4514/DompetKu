<template>
  <!-- Navbar Section -->
  <header class="fixed top-0 left-0 w-full bg-[#0e0f12] h-20 shadow-md z-50">
    <nav class="flex justify-between items-center h-full px-6 lg:px-16 max-w-screen-xl mx-auto">
      <!-- Logo -->
      <a href="#" class="text-white text-xl font-semibold">DompetKu</a>

      <!-- Navbar Links -->
      <ul class="hidden md:flex items-center space-x-8">
        <li><a href="#"
            class="text-white text-sm font-medium hover:text-gray-400 transition-colors duration-200">Home</a></li>
        <li><a href="#"
            class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Management</a>
        </li>
        <li><a href="#" class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">About
            Us</a></li>
        <li><a href="#"
            class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Payment</a></li>
        <li><a href="#"
            class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Testimonial</a>
        </li>
      </ul>

      <!-- Get Started Button -->
      <button
        class="bg-transparent border border-gray-400 rounded-md px-4 py-2 text-white text-sm font-medium hover:bg-gray-700 hover:border-gray-500 transition-colors duration-200">
        Get Started
      </button>
    </nav>
  </header>

  <!-- Hero Section -->
  <div class="relative bg-[#131521] w-full h-screen flex items-center justify-center overflow-hidden">
    <!-- Gradient Blurs -->
    <div class="absolute w-96 h-96 -left-10 top-20 bg-[#08c891] rounded-full blur-3xl opacity-30"></div>
    <div class="absolute w-96 h-96 right-10 top-44 bg-[#08c891] rounded-full blur-3xl opacity-30"></div>

    <!-- Grid Container untuk Membagi 50/50 -->
    <div
      class="relative z-10 grid grid-cols-1 lg:grid-cols-2 items-center w-full max-w-screen-xl mx-auto px-8 lg:px-16 py-24 gap-8">
      <!-- Kolom Kiri: Konten Teks -->
      <div class="flex flex-col space-y-6 text-left">
        <h2 class="text-white text-4xl lg:text-5xl font-bold leading-snug">
          Dompetku Solusi mudah untuk mengelola keuangan Anda.
        </h2>
        <p class="text-white text-base lg:text-lg font-normal leading-loose max-w-lg">
          Kelola pendapatan, pengeluaran, dan tabungan dengan praktis. Gabung sekarang dan mulai atur keuangan Anda
          dengan Dompetku!
        </p>
        <div class="flex space-x-6">
          <!-- Get Started Button -->
          <button
            class="bg-[#00966b] hover:bg-[#007d58] text-white py-3 px-6 rounded-lg transition-colors duration-200">
            Get Started
          </button>
          <!-- Learn More Button -->
          <a href="#" class="text-white text-base leading-loose underline hover:text-gray-300">
            Learn more about us
          </a>
        </div>
      </div>

      <!-- Kolom Kanan: Gambar atau Ilustrasi -->
      <div class="flex justify-center items-center">
        <img src="https://via.placeholder.com/400x300" alt="Financial Illustration"
          class="w-full max-w-md rounded-lg shadow-lg opacity-90" />
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <section class="flex flex-col items-center py-12 h-screen mt-16">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">Kami memiliki banyak fitur hanya untuk Anda</h1>
    <p class="text-lg text-gray-500 mb-12">Kami memiliki banyak fitur yang akan membantu keuangan Anda aman dan Anda
      akan bahagia</p>

    <div class="px-4 md:px-8 lg:px-20">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Card 1 -->
        <div
          class="bg-white text-black p-14 rounded-xl flex flex-col items-center hover:bg-[#131521] hover:text-white transition-colors duration-300 shadow-lg border border-gray-200">
          <div class="flex items-center justify-center h-20 w-20 bg-[#00966b] rounded mb-8">
            <!-- Icon -->
            <font-awesome-icon icon="fa-solid fa-bars-progress" />
          </div>
          <h2 class="text-2xl font-semibold mb-2 text-center">Pengelolaan Keuangan <br> yang Mudah</h2>
          <p class="text-base mb-4 text-center">Atur pemasukan, pengeluaran, dan anggaran dalam satu aplikasi. Lihat
            laporan keuangan secara jelas dan terstruktur.</p>
          <button
            class="bg-transparent border border-[#00966b] rounded-md px-4 py-2 text-[#00966b] text-sm font-medium hover:bg-[#00966b] hover:border-[#007055] hover:text-white transition-colors duration-200">
            Learn more
          </button>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-white text-black p-14 rounded-xl flex flex-col items-center hover:bg-[#131521] hover:text-white transition-colors duration-300 shadow-lg border border-gray-200">
          <div class="flex items-center justify-center h-20 w-20 bg-[#00966b] rounded mb-8">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <h2 class="text-2xl font-semibold mb-2 text-center">Peringatan & Notifikasi Cerdas</h2>
          <p class="text-base mb-4 text-center">Dapatkan notifikasi otomatis untuk tagihan, anggaran, dan pengeluaran
            agar Anda tidak pernah lupa.</p>
          <button
            class="bg-transparent border border-[#00966b] rounded-md px-4 py-2 text-[#00966b] text-sm font-medium hover:bg-[#00966b] hover:border-[#007055] hover:text-white transition-colors duration-200">
            Learn more
          </button>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-white text-black p-14 rounded-xl flex flex-col items-center hover:bg-[#131521] hover:text-white transition-colors duration-300 shadow-lg border border-gray-200">
          <div class="flex items-center justify-center h-20 w-20 bg-[#00966b] rounded mb-8">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12h6m2 4H7m2-8h8m-6 8v4m0-4l-4 4m4-4l4 4" />
            </svg>
          </div>
          <h2 class="text-2xl font-semibold mb-2 text-center">Laporan <br> Keuangan Lengkap</h2>
          <p class="text-base mb-4 text-center">Dapatkan laporan keuangan yang jelas dan terperinci untuk membantu Anda
            membuat keputusan finansial yang lebih baik.</p>
          <button
            class="bg-transparent border border-[#00966b] rounded-md px-4 py-2 text-[#00966b] text-sm font-medium hover:bg-[#00966b] hover:border-[#007055] hover:text-white transition-colors duration-200">
            Learn more
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Home',
};
</script>
