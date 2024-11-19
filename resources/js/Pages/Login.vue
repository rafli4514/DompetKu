<template>
  <section class="flex min-h-screen">
    <!-- Left Section -->
    <div class="w-1/2 bg-[#131521] flex items-center justify-center relative overflow-hidden">
      <!-- Decorative Elements -->
      <div class="absolute w-80 h-96 bg-[#0effba] rounded-full blur-3xl left-[60%] top-[-20%] opacity-30"></div>
      <div class="absolute w-80 h-96 bg-[#0effba] rounded-full blur-3xl left-[-10%] top-[70%] opacity-30"></div>
      <!-- Decorative PNG Images -->
      <img :src="getImageUrl('box1.png')" alt="Decorative Box 1" class="absolute w-50 h-80 left-[5%] top-[2%]">
      <img :src="getImageUrl('box2.png')" alt="Decorative Box 2" class="absolute w-50 h-80 right-[5%] top-[2%]">
      <img :src="getImageUrl('box3.png')" alt="Decorative Box 3" class="absolute w-40 h-72 left-[5%] bottom-[2%]">
      <img :src="getImageUrl('box4.png')" alt="Decorative Box 4" class="absolute w-40 h-72 right-[5%] bottom-[2%]">
      <div class="text-white text-center relative">
        <h1 class="text-6xl font-bold leading-tight mb-8">Welcome to<br />DompetKu</h1>
        <p class="text-sm leading-7 max-w-md">Kelola pendapatan, pengeluaran, dan tabungan dengan praktis. Gabung
          sekarang dan mulai atur keuangan Anda dengan DompetKu!</p>
      </div>
    </div>

    <!-- Right Section -->
    <div class="w-1/2 bg-white flex items-center justify-center relative">
      <div class="max-w-md w-full p-10">
        <!-- Sign Up Link -->
        <div class="text-right mb-4">
          <span class="text-[#07122e] text-sm">Belum punya akun?</span>
          <a href="/sign-up" class="text-[#00966b] text-sm font-semibold ml-2">Sign up</a>
        </div>

        <!-- Sign In Form -->
        <h2 class="text-4xl text-[#07122e] font-semibold mb-6">Sign In</h2>
        <p class="text-xs text-[#8d93a1] mb-8">Enter your email and password to login to your account</p>
        <form>
          <!-- Email Input -->
          <div class="mb-6">
            <label for="email" class="sr-only">Email Address</label>
            <input type="email" id="email" placeholder="Email Address"
              class="w-full p-4 rounded-lg border border-[#e4ebf3] text-sm text-[#07122e] focus:outline-none focus:ring-2 focus:ring-[#00966b]">
          </div>

          <!-- Password Input -->
          <div class="mb-8">
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" placeholder="8+ strong password"
              class="w-full p-4 rounded-lg border border-[#e4ebf3] text-sm text-[#07122e] focus:outline-none focus:ring-2 focus:ring-[#00966b]">
          </div>

          <!-- Sign In Button -->
          <button type="submit"
            class="w-full py-4 bg-[#00966b] text-white rounded-lg text-sm font-semibold hover:bg-[#007d58] transition duration-300 shadow-lg mb-4">Sign
            In</button>

          <!-- Or Sign In With -->
          <div class="text-center text-[#8d93a1] text-xs mb-4">Or sign in with</div>

          <!-- Social Media Sign In -->
          <div class="flex justify-center gap-4">
            <button type="button"
              class="w-36 h-14 border border-[#e4ebf3] rounded-lg flex items-center justify-center hover:bg-[#f0f0f0] transition duration-300">
              <img :src="getIconUrl('devicon_google.png')" alt="" class="w-8 h-8">              
            </button>
            <button type="button"
              class="w-36 h-14 border border-[#e4ebf3] rounded-lg flex items-center justify-center hover:bg-[#f0f0f0] transition duration-300">
              <img :src="getIconUrl('logos_facebook.png')" alt="" class="w-8 h-8">              
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>



<script>
export default {
  name: 'Login',
  methods: {
    getImageUrl(filename) {
      return `/assets/${filename}`;
    },
    
    getIconUrl(filename) {
      return `/assets/icon/${filename}`;
    }
  },
};
</script>
