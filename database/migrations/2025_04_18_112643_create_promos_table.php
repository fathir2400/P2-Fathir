<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('judul_promo');
            $table->text('deskripsi')->nullable();
            $table->string('kode_promo')->nullable()->unique();
            $table->enum('tipe_promo', ['persentase', 'nominal', 'beli1gratis1']);
            $table->decimal('nilai_promo', 10, 2)->nullable(); // diskon dalam bentuk persen atau nominal
            $table->unsignedBigInteger('menu_id')->nullable(); // jika promo untuk menu tertentu
            $table->unsignedBigInteger('kategori_id')->nullable(); // jika promo untuk kategori tertentu
            $table->unsignedBigInteger('outlet_id'); // berlaku untuk outlet tertentu
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->boolean('status')->default(true); // aktif/tidak
            $table->timestamps();

            // Relasi
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategoris')->onDelete('set null');
            $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promos');
    }

};
