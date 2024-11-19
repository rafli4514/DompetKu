<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id('investment_id'); // ID utama tabel investments
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users
            $table->string('nama_investasi'); // Nama investasi
            $table->string('jenis_investasi'); // Jenis investasi
            $table->decimal('jumlah_investasi', 15, 2); // Jumlah dana yang diinvestasikan
            $table->decimal('tingkat_pengembalian', 5, 2); // Tingkat pengembalian dalam persentase
            $table->date('tanggal_mulai'); // Tanggal dimulainya investasi
            $table->date('tanggal_selesai')->nullable(); // Tanggal selesai (nullable untuk investasi yang belum selesai)
            $table->enum('status', ['aktif', 'selesai']); // Status investasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
