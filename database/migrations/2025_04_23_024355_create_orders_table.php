<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID utama (primary key)
            $table->string('kode_pesanan')->unique(); // contoh: INV-20250423-001
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // pengguna yang membuat pesanan (kasir/admin)
            $table->foreignId('outlet_id')->constrained()->onDelete('cascade'); // outlet tempat pemesanan
            $table->unsignedBigInteger('pelanggan_id')->nullable();  // Kolom pelanggan_id untuk pelanggan yang melakukan pemesanan

            // Menambahkan constraint foreign key untuk pelanggan_id
            $table->foreign('pelanggan_id')->references('id')->on('users')->onDelete('set null'); // Relasi dengan tabel users (pelanggan)
            $table->enum('status', ['pending', 'paid', 'canceled'])->default('pending');
            $table->foreignId('meja_id')->constrained()->onDelete('cascade'); // status pesanan
            $table->enum('metode_pembayaran', ['cash', 'qris', 'debit'])->nullable(); // metode pembayaran

            $table->decimal('subtotal', 12, 2)->default(0); // total sebelum diskon & pajak
            $table->decimal('diskon', 12, 2)->default(0); // potongan harga
            $table->decimal('pajak', 12, 2)->default(0); // pajak (jika ada)
            $table->decimal('total', 12, 2)->default(0); // total akhir yang harus dibayar

            $table->timestamps(); // kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders'); // hapus tabel jika rollback
    }
};

