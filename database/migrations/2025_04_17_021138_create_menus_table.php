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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategoris')->onDelete('cascade');

            $table->decimal('harga', 10, 2);
            $table->integer('stok')->default(0);
            $table->string('gambar')->nullable(); // untuk upload foto menu
            $table->foreignId('outlet_id')->constrained('outlets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
