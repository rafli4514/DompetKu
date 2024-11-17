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
        Welcome to Dompetku.
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
    <!-- Include existing code above -->

    <!-- Add this section for a login form -->
    <div class="bg-[#1e1f24] p-8 shadow-lg rounded-lg w-full">
        <div class="mb-6 text-left">
          <p class="text-sm text-gray-500">Belum punya akun? <a href="#" class="text-green-600 font-medium hover:text-green-500">Sign up</a></p>
        </div>
    <div class="flex justify-center items-center mt-8">
        <form class="bg-[#1e1f24] p-6 rounded-lg shadow-lg w-full max-w-md">
            <h3 class="text-white text-2xl font-semibold mb-4">Sign In</h3>
            <div class="mb-4">
                <label for="email" class="block text-white text-sm mb-2">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email" class="w-full p-3 rounded-lg bg-[#2b2c31] text-white border border-gray-600" />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-white text-sm mb-2">Password</label>
                <input type="password" id="password" placeholder="8+ strong password" class="w-full p-3 rounded-lg bg-[#2b2c31] text-white border border-gray-600" />
            </div>
            <button type="submit" class="w-full bg-[#00966b] text-white py-3 rounded-lg mt-4 hover:bg-[#007d58] transition-colors duration-200">Sign In</button>
            <div class="mt-4 text-center">
                <span class="text-gray-400">Or sign in with</span>
                <div class="flex justify-center mt-2 space-x-4">
                    <button type="button" class="bg-white p-2 rounded-full"><img src="/path/to/google-icon.png" alt="Google" /></button>
                    <button type="button" class="bg-white p-2 rounded-full"><img src="/path/to/facebook-icon.png" alt="Facebook" /></button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
</div>
</template>


<script>
export default {
    name: 'Login',
};
</script>
