<template>
  <!-- Navbar Section -->
  <header class="fixed top-0 left-0 w-full max-w-full bg-[#0e0f12]/30 h-20 shadow-md overflow-hidden z-50">
    <nav class="flex justify-between items-center h-full px-6 lg:px-16 max-w-screen-xl mx-auto">
      <!-- Logo -->
      <a href="#" class="text-white text-xl font-semibold">DompetKu</a>

      <!-- Navbar Links -->
      <ul class="hidden md:flex items-center space-x-8">
        <li><a href="#" class="text-white text-sm font-medium hover:text-gray-400 transition-colors duration-200">Home</a></li>
        <li><a href="#" class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Management</a></li>
        <li><a href="#" class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">About Us</a></li>
        <li><a href="#" class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Payment</a></li>
        <li><a href="#" class="text-white text-sm font-normal hover:text-gray-400 transition-colors duration-200">Testimonial</a></li>
      </ul>

      <!-- Get Started Button -->
      <button class="bg-transparent border border-gray-400 rounded-md px-4 py-2 text-white text-sm font-medium hover:bg-gray-700 hover:border-gray-500 transition-colors duration-200">
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
  <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 items-center w-full max-w-screen-xl mx-auto px-8 lg:px-16 py-24 gap-8">
    <!-- Kolom Kiri: Konten Teks -->
    <div class="flex flex-col space-y-6 text-left">
      <h2 class="text-white text-4xl lg:text-5xl font-bold leading-snug">
        Dompetku Solusi mudah untuk mengelola keuangan Anda.
      </h2>
      <p class="text-white text-base lg:text-lg font-normal leading-loose max-w-lg">
        Kelola pendapatan, pengeluaran, dan tabungan dengan praktis. Gabung sekarang dan mulai atur keuangan Anda dengan Dompetku!
      </p>
      <div class="flex space-x-6">
        <!-- Get Started Button -->
        <button class="bg-[#00966b] hover:bg-[#007d58] text-white py-3 px-6 rounded-lg transition-colors duration-200">
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
      <img src="https://via.placeholder.com/400x300" alt="Financial Illustration" class="w-full max-w-md rounded-lg shadow-lg opacity-90" />
    </div>
  </div>
</div>
</template>
