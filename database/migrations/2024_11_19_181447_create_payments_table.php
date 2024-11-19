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
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke tabel users
            $table->string('name'); // Nama tagihan
            $table->decimal('amount', 10, 2); // Jumlah tagihan
            $table->date('due_date'); // Tanggal jatuh tempo
            $table->string('category', 100); // Kategori tagihan
            $table->enum('status', ['Paid', 'Unpaid']); // Status pembayaran
            $table->boolean('recurring')->default(false); // Apakah tagihan berulang
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
