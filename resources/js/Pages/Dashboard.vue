<!-- App.vue -->
<template>
  <div class="flex min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r p-6">
      <div class="mb-8">
        <h1 class="text-xl font-bold">DompetKu.</h1>
      </div>
      
      <nav class="space-y-4">
        <a href="#" class="flex items-center space-x-3 text-emerald-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
          </svg>
          <span>Dashboard</span>
        </a>
        
        <a href="#" class="flex items-center space-x-3 text-gray-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
          </svg>
          <span>Dompet</span>
        </a>

        <a href="#" class="flex items-center space-x-3 text-gray-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
          </svg>
          <span>Transaksi</span>
        </a>

        <!-- Tambahkan menu lainnya dengan pola yang sama -->
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input 
              type="search" 
              placeholder="Search" 
              class="pl-10 pr-4 py-2 border rounded-lg w-64"
            >
            <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
          <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-3 gap-6 mb-8">
        <div class="bg-emerald-500 p-6 rounded-lg text-white">
          <p class="text-sm opacity-80">Total Pendapatan</p>
          <div class="flex justify-between items-center mt-2">
            <p class="text-2xl font-bold">Rp 8.675.00</p>
            <div class="flex items-center">
              <span class="text-sm">35%</span>
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
              </svg>
            </div>
          </div>
          <p class="text-sm mt-2">Bulan ini</p>
        </div>

        <div class="bg-red-800 p-6 rounded-lg text-white">
          <p class="text-sm opacity-80">Total Pengeluaran</p>
          <div class="flex justify-between items-center mt-2">
            <p class="text-2xl font-bold">Rp 8.675.00</p>
            <div class="flex items-center">
              <span class="text-sm">24%</span>
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
              </svg>
            </div>
          </div>
          <p class="text-sm mt-2">Bulan ini</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg">
          <p class="text-sm text-gray-600">Total</p>
          <p class="text-2xl font-bold mt-2">Rp 1.220.00</p>
          <p class="text-sm text-gray-600 mt-2">Bulan ini</p>
        </div>
      </div>

      <!-- Charts and Goals -->
      <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg">
          <div class="flex justify-between items-center mb-6">
            <h3 class="font-semibold">Analisis Keuangan</h3>
            <select class="border rounded-md px-3 py-1">
              <option>Bulan</option>
            </select>
          </div>
          <canvas ref="chart" height="250"></canvas>
        </div>

        <div class="bg-white p-6 rounded-lg">
          <div class="flex justify-between items-center mb-6">
            <h3 class="font-semibold">Tujuan Keuangan</h3>
            <button class="bg-emerald-500 text-white px-4 py-1 rounded-md flex items-center">
              Add
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </button>
          </div>

          <div class="space-y-6">
            <div>
              <div class="flex justify-between text-sm mb-2">
                <span>Jalan-Jalan ke Paris</span>
                <span>Rp 42.000.00/Rp50.000.00</span>
              </div>
              <div class="h-2 bg-gray-200 rounded-full">
                <div class="h-2 bg-emerald-500 rounded-full w-4/5"></div>
              </div>
            </div>

            <div>
              <div class="flex justify-between text-sm mb-2">
                <span>Laptop Baru</span>
                <span>Rp 12.000.00/50.000.00</span>
              </div>
              <div class="h-2 bg-gray-200 rounded-full">
                <div class="h-2 bg-emerald-500 rounded-full w-1/4"></div>
              </div>
            </div>

            <div>
              <div class="flex justify-between text-sm mb-2">
                <span>Sedekah</span>
                <span>Rp 35.000.00/50.000.00</span>
              </div>
              <div class="h-2 bg-gray-200 rounded-full">
                <div class="h-2 bg-emerald-500 rounded-full w-3/4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import { Chart } from 'chart.js/auto'

export default {
  name: 'App',
  mounted() {
    this.initChart()
  },
  methods: {
    initChart() {
      const ctx = this.$refs.chart.getContext('2d')
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr'],
          datasets: [
            {
              label: 'Pendapatan',
              data: [4000, 8000, 6000, 9000],
              backgroundColor: '#10B981'
            },
            {
              label: 'Pengeluaran',
              data: [3000, 1000, 2000, 1500],
              backgroundColor: '#D1D5DB'
            }
          ]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                callback: value => `${value}k`
              }
            }
          }
        }
      })
    }
  }
}
</script>
