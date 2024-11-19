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
        Schema::create('goals', function (Blueprint $table) {
            $table->id('goal_id'); // ID utama tabel goals
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users
            $table->string('nama_tujuan'); // Nama tujuan (goal)
            $table->decimal('jumlah_target', 15, 2); // Jumlah target dana yang ingin dicapai
            $table->decimal('jumlah_sekarang', 15, 2)->default(0); // Jumlah dana terkumpul saat ini
            $table->date('tanggal_jatuh_tempo'); // Tanggal jatuh tempo pencapaian tujuan
            $table->enum('status', ['aktif', 'selesai', 'dibatalkan']); // Status tujuan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
