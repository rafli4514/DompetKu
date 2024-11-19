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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id'); // Primary key
            $table->unsignedBigInteger('account_id'); // Foreign key harus tipe unsignedBigInteger
            $table->foreign('account_id')->references('account_id')->on('accounts')->onDelete('cascade'); // Relasi ke accounts
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->enum('jenis_transaksi', ['pendapatan', 'pengeluaran', 'transfer']);
            $table->decimal('jumlah', 15, 2);
            $table->date('tanggal_transaksi');
            $table->string('kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
