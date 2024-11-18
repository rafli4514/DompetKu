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

      <!-- Sign In and Sign Up Buttons -->
      <div class="flex space-x-4">
        <inertia-link href="{{ route('login') }}" class="bg-transparent border border-gray-400 rounded-md px-4 py-2 text-white text-sm font-medium hover:bg-gray-700 hover:border-gray-500 transition-colors duration-200">Sign In</inertia-link>
        <inertia-link href="{{ route('register') }}" class="bg-[#00966b] text-white rounded-md px-4 py-2 text-sm font-medium hover:bg-[#007d58] transition-colors duration-200">Sign Up</inertia-link>
      </div>
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

  <section class="bg-white h-screen p-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center py-20">
      <!-- Illustration Section -->
      <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-8 md:mb-0">
        <img src="https://via.placeholder.com/600x400" alt="Financial Management Illustration" class="">
      </div>

      <!-- Text Content Section -->
      <div class="w-full md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">Manajemen keuangan Anda akan aman dan Anda tidak akan khawatir
          dengan uang Anda</h1>
        <p class="text-gray-600 text-base mb-6">Kami akan mengurus dan mengelola keuangan Anda dan keluarga tercinta.
          Dengan langkah yang sangat mudah dan cepat. ayo bergabung bersama kami</p>
        <a href="#"
          class="bg-[#00966b] hover:bg-[#007d58] text-white py-3 px-6 rounded-lg transition-colors duration-200">
          Learn more</a>
      </div>
    </div>
  </section>

  <section class="flex flex-col items-center bg-[#0e101d] py-12 h-screen">
    <div class="text-center text-white mb-8 mt-16">
      <h1 class="text-4xl font-bold mb-6">Bagaimana cara kerjanya</h1>
      <p class="text-base font-normal">
        Kami akan mengurus dan mengelola keuangan Anda dan keluarga tercinta. <br> Dengan langkah yang sangat mudah dan
        cepat. Ayo bergabung bersama kami.
      </p>
    </div>

    <div class="px-4 md:px-8 lg:px-20 w-full">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="bg-white rounded-2xl shadow-lg p-14 text-center mx-auto col-span-1">
          <div class="mb-4">
            <div class="w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-6"
              style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
              <!-- Icon placeholder -->
            </div>
          </div>
          <h2 class="text-2xl font-medium text-[#222222] mb-6">Integrasi Keuangan Sederhana</h2>
          <p class="text-base text-[#767676]">
            Aplikasi mengumpulkan data pemasukan, pengeluaran, dan anggaran Anda dalam satu tempat, memudahkan
            pengelolaan keuangan pribadi.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-14 text-center mx-auto col-span-1">
          <div class="mb-4">
            <div class="w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-6"
              style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
              <!-- Icon placeholder -->
            </div>
          </div>
          <h2 class="text-2xl font-medium text-[#222222] mb-6">Peringatan Cerdas untuk Anda</h2>
          <p class="text-base text-[#767676]">
            Dengan teknologi notifikasi pintar, aplikasi memberikan pengingat untuk tagihan, pengeluaran, dan anggaran
            yang mendekati batas.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-14 text-center mx-auto col-span-1">
          <div class="mb-4">
            <div class="w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-6"
              style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
              <!-- Icon placeholder -->
            </div>
          </div>
          <h2 class="text-2xl font-medium text-[#222222] mb-6">Laporan Keuangan <br> Otomatis</h2>
          <p class="text-base text-[#767676]">
            Aplikasi menghasilkan laporan keuangan yang lengkap dan terstruktur, membantu Anda melihat gambaran besar
            keuangan Anda dengan mudah.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-r from-[#00966b] to-teal-500 p-16 mt-16 h-96">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold text-white mb-6">Bergabunglah bersama kami untuk mendapatkan semua <br> fitur-fitur
        hebat dalam mengelola keuangan Anda</h2>
      <p class="text-white text-base mb-8">Mari bergabung dengan kami dan berlangganan. Ada banyak fitur menarik yang
        menanti Anda, <br> dan juga Anda dapat memantau dan mengelola keuangan Anda dengan sangat mudah dan cepat di
        mana pun Anda dapat melakukannya.</p>
      <form class="flex justify-center items-center gap-4 max-w-xl mx-auto">
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" placeholder="Enter email here" class="flex-grow p-4 rounded-lg text-gray-700">
        <button type="submit"
          class="bg-gray-900 text-white px-6 py-4 rounded-lg hover:bg-gray-700 hover:shadow-lg transition duration-300">Send</button>
      </form>
    </div>
  </section>

  <section class="flex flex-col items-center bg-white py-12 h-screen">
    <header class="text-center mb-8 mt-16">
      <h1 class="text-4xl font-bold text-[#222222] mb-8">Apa yang dikatakan oleh <br> pelanggan kami</h1>
      <p class="text-base text-[#767676]">Lihat apa yang dikatakan pelanggan tentang kami</p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-4 md:px-8 lg:px-20">
      <article class="bg-white rounded-2xl shadow-lg p-12">
        <div class="flex items-center mb-4">
          <img src="https://via.placeholder.com/32x32" alt="Avatar Mamad" class="w-8 h-8 rounded-full mr-4">
          <div>
            <h2 class="text-sm font-medium text-[#222222]">Mamad</h2>
            <p class="text-xs text-[#aaaaaa]">Curug</p>
          </div>
        </div>
        <p class="text-sm text-black/60 mb-4">Layanan yang sangat menarik yang diberikan kepada pelanggan, aksesnya
          sangat cepat dan kita juga bisa melihat perkembangan uang kita. dan tingkat mengelola keuangan sangat baik dan
          sangat cepat.</p>
        <div class="flex">
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
        </div>
      </article>

      <article class="bg-white rounded-2xl shadow-lg p-12">
        <div class="flex items-center mb-4">
          <img src="https://via.placeholder.com/32x32" alt="Avatar Momod" class="w-8 h-8 rounded-full mr-4">
          <div>
            <h2 class="text-sm font-medium text-[#222222]">Momod</h2>
            <p class="text-xs text-[#767676]">Indonesia</p>
          </div>
        </div>
        <p class="text-sm text-black/60 mb-4">Mengapa saya baru tahu tentang mengelola uang secara instan dan mudah
          dimengerti. Dan jangan khawatir jika ada masalah mereka sangat responsif. Terima kasih telah membantu saya dan
          keluarga saya.</p>
        <div class="flex">
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
        </div>
      </article>

      <article class="bg-white rounded-2xl shadow-lg p-12">
        <div class="flex items-center mb-4">
          <img src="https://via.placeholder.com/32x32" alt="Avatar Memed" class="w-8 h-8 rounded-full mr-4">
          <div>
            <h2 class="text-sm font-medium text-[#222222]">Memed</h2>
            <p class="text-xs text-[#aaaaaa]">Bulgarian</p>
          </div>
        </div>
        <p class="text-sm text-black/60 mb-4">Layanan dan fitur mereka sangat bagus dan juga sangat berbeda dari yang
          lain yang membuat saya kagum saya mereka selalu memperlakukan keuangan kami.</p>
        <div class="flex">
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
          <span class="text-yellow-500">★</span>
        </div>
      </article>
    </div>
  </section>

  <footer class="bg-[#0d0f1c] text-white p-20">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between">
      <div class="mb-8 md:mb-0">
        <h2 class="text-2xl font-medium">DompetKu</h2>
        <p class="mt-4 text-base leading-7">
          We have a mission to make people around <br> the world better through a healthier life and diet
        </p>
        <p class="mt-4 text-base">@2021. All right reserved</p>
      </div>
      <div class="flex flex-wrap md:flex-nowrap gap-8">
        <div>
          <h3 class="text-lg font-bold">About Us</h3>
          <ul class="mt-4 space-y-2">
            <li>Our people</li>
            <li>Our activities</li>
            <li>Contact us</li>
            <li>Testimonial</li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold">Our principles</h3>
          <ul class="mt-4 space-y-2">
            <li>Corporate principles</li>
            <li>Independent inspections</li>
            <li>Best practices</li>
            <li>Best price</li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold">Product</h3>
          <ul class="mt-4 space-y-2">
            <li>Healty diet</li>
            <li>Treatment diet</li>
            <li>Food diet</li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold">Info</h3>
          <ul class="mt-4 space-y-2">
            <li>FAQ</li>
            <li>Cookie & help</li>
            <li>Help</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mx-auto px-4 mt-8 flex justify-between">
      <a href="#" class="text-base">Terms & conditions</a>
      <a href="#" class="text-base">Privacy policy</a>
    </div>
  </footer>

</template>

<script>
export default {
  name: 'Home',
};
</script>
