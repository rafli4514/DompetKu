# Dompetku

Dompetku adalah aplikasi pengelolaan keuangan pribadi berbasis web yang dirancang untuk membantu pengguna mengatur, melacak, dan menganalisis keuangan mereka. Dibangun menggunakan Laravel, Vue.js, dan Inertia.js, Dompetku menawarkan pengalaman pengguna yang cepat dan mulus dengan antarmuka yang interaktif.

## Teknologi yang Digunakan

- **Front-End**: Vue.js, Inertia.js, Bootstrap, HTML, CSS
- **Back-End**: Laravel (PHP)
- **Database**: MySQL

## Prasyarat
Pastikan memiliki tool berikut:
- **Composer >= v2.8.2**
- **Node.js >= v20.16.0**
- **npm >= 10.8.1**
- **MySQL**

## Instalasi

1. **Clone repositori ini:**
   ```bash
   git clone https://github.com/username/dompetku.git
   cd dompetku
   ```

2. **Instal dependensi Laravel:**
   ```bash
   composer install
   ```

3. **Instal dependensi front-end:**
   ```bash
   npm install
   ```

4. **Konfigurasi file lingkungan:**
   Salin file `.env.example` menjadi `.env` dan perbarui konfigurasi database Anda:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Migrasi dan seeding database:**
   ```bash
   php artisan migrate --seed
   ```

6. **Kompilasi aset front-end:**
   ```bash
   npm run dev
   ```

7. **Jalankan server pengembangan Laravel:**
   ```bash
   php artisan serve
   ```

8. Buka aplikasi Anda di browser di `http://localhost:8000`.

## Kontribusi

Kami menyambut kontribusi dari Teman-teman! Silakan buka *issue* atau kirim *pull request* untuk menambahkan fitur baru atau memperbaiki bug.

## Penulis

- **Muhammad Rafli Aulia**
- **Teuku Aldie Aulia**
